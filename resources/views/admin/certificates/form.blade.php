@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('files', [
        'name' => 'cerfile',
        'label' => 'Certificat',
        'note' => 'Le certificat doit être au format PDF.'
    ])

    @formField('browser' , [
        'moduleName' => 'bikes',
        'name' => 'bikes',
        'label' => 'Vélos rattachés',
        'max' => 8
    ])
@stop
