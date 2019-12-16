@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Affichage',
    'additionalFieldsets' => [
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
])

@section('contentFields')
    @formField('input', [
        'label' => 'Afficher les prix publics',
        'name' => 'public_prices',
        'textLimit' => '3',
        'note' => 'oui / non'
    ])

    @formField('input', [
        'label' => 'Afficher les distributeurs internationaux',
        'name' => 'display_global_stores',
        'textLimit' => '3',
        'note' => 'oui / non'
    ])


@endsection
