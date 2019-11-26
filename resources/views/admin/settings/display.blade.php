@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Affichage',
])

@section('contentFields')
@formField('select', [
    'name' => 'display_prices',
    'label' => 'Affichage des tarifs publics',
    'placeholder' => ' les prix publics sur le site ?',
    'default' => 'no',
    'options' => [
        [
            'value' => 'no',
            'label' => 'Non'
        ],
        [
            'value' => 'yes',
            'label' => 'Oui'
        ],
    ]
])
@endsection
