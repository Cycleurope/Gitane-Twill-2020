@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'firstname',
        'label' => 'Firstname',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'lastname',
        'label' => 'Lastname',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'email',
        'label' => 'e-Mail',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'postalcode',
        'label' => 'Code Postal',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'city',
        'label' => 'Ville',
        'maxlength' => 100
    ])
    @formField('wysiwyg', [
        'name' => 'message',
        'label' => 'Message',
        'maxlength' => 100
    ])

    @formField('select', [
        'name' => 'status',
        'label' => 'Statut',
        'unpack' => true,
        'placeholder' => 'Select an office',
        'options' => [
            [
                'value' => 'pending',
                'label' => 'En attente'
            ],
            [
                'value' => 'in_review',
                'label' => 'En cours de traitement'
            ],
            [
                'value' => 'closed',
                'label' => 'Traité'
            ]
        ]
    ])
@stop
