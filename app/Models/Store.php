<?php

namespace App\Models  ;

use A17\Twill\Models\Behaviors\HasMedias  ;
use A17\Twill\Models\Behaviors\HasPosition  ;
use A17\Twill\Models\Behaviors\Sortable  ;
use A17\Twill\Models\Model  ;

class Store extends Model implements Sortable
{
    use HasMedias , HasPosition  ;

    protected $fillable = [
        'published' ,
        'shopname' ,
        'title' ,
        'code' ,
        'address1' ,
        'address2' ,
        'postalcode' ,
        'city' ,
        'phone' ,
        'email' ,
        'picture' ,
        'latitude' ,
        'longitude' ,
        'position' ,
        // 'featured' ;
        // 'publish_start_date' ;
        // 'publish_end_date' ;
    ]  ;

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ]  ;

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'picture' => [
            'default' => [
                [
                    'name' => 'landscape' ,
                    'ratio' => 16 / 9 ,
                ] ,
            ]
        ] ,
    ]  ;

    public function fullAddress()
    {
        $address1 = $this->address1  ;
        $address2 = $this->address2  ;
        $postalcode = $this->postalcode  ;
        $city = $this->city  ;
        if(trim($address1) == '' xor trim($address2) == '') {
            return $address1.$address2.'<br />'.$postalcode.' '.$city  ;
        } elseif (trim($address1) != '' && trim($address2) != '') {
            return $address1.'<br />'.$address2.'<br />'.$postalcode.' '.$city  ;
        } else {
            return $postalcode.' '.$city  ;  ;
        }
    }

    public function geolocationButton()
    {
        $latitude = $this->latitude  ;
        $longitude = $this->longitude  ;
        if($latitude != '' && $longitude != '') {
            return '<a href="" class="btn btn-sm btn-primary">Find on the map</a>'  ;
        } return  ;
    }

    public function frendlyPhoneNumber() {
        $friendlyPhone = $this->phone;
        $s=" ";
        $d01 = substr($this->phone, 0, 2);
        $d02 = substr($this->phone, 2, 2);
        $d03 = substr($this->phone, 4, 2);
        $d04 = substr($this->phone, 6, 2);
        $d05 = substr($this->phone, 8, 2);
        if(trim(strlen($this->phone)) == 10) {
            $friendlyPhone = $d01.$s.$d02.$s.$d03.$s.$d04.$s.$d05;
        }
        return $friendlyPhone;
    }
}
