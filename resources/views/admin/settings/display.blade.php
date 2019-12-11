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

    @formField('input', [
        'label' => 'Mots-cleeeeeés',
        'name' => 'websifffffte_keywords',
        'textLimit' => '255',
        'translated' => true
    ])

</a17-fieldset>
@endsection