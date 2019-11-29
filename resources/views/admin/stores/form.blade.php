@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'geolocation', 'label' => 'Geolocalisation'],
    ]
])

@section('contentFields')

    @formField('medias',[
        'name' => 'featured_picture',
        'label' => 'Photo',
    ])

    @formField('input', [
        'name' => 'code',
        'label' => 'Code Client',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'shopname',
        'label' => 'Nom du point de vente',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'address1',
        'label' => 'Adresse - Ligne 1',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'address2',
        'label' => 'Adresse - Ligne 2',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'postalcode',
        'label' => 'Code Postal',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'city',
        'label' => 'Ville',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('browser' , [
        'moduleName' => 'countries',
        'name' => 'countries',
        'label' => 'Pays',
        'max' => 1
    ])

    @formField('input', [
        'name' => 'phone',
        'label' => 'Téléphone',
        'translated' => false,
        'maxlength' => 20
    ])

    @formField('input', [
        'name' => 'email',
        'label' => 'Adresse e-mail',
        'translated' => false,
        'maxlength' => 200
    ])

@stop

@section('fieldsets')
<a17-fieldset   title="Géolocalisation" id="geolocation" :open="true">
    @formField('input', [
        'name' => 'latitude',
        'label' => 'Latitude',
        'translated' => false,
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'longitude',
        'label' => 'Longitude',
        'translated' => false,
        'maxlength' => 200
    ])
</a17-fieldset>
@endsection