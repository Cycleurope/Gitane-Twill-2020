@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Affichage',
    'additionalFieldsets' => [
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
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

@section('fieldsets')
<a17-fieldset title="Distributeurs" id="stores" :open="true">

    @formField('checkbox' , [
        'name' => 'display_global' ,
        'label' => 'Afficher les distributeurs dans le monde.'
    ])

</a17-fieldset>
@endsection