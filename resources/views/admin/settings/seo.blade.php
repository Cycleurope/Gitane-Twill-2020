@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Global',
    'additionalFieldsets' => [
        ['fieldset' => 'home', 'label' => 'Home'],
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
])

@section('contentFields')
    @formField('input', [
        'label' => 'Préfixe global du site',
        'name' => 'website_prefix',
        'textLimit' => '80',
        'translated' => true
    ])
    @formField('input', [
        'label' => 'Description globale du site',
        'name' => 'website_description',
        'textLimit' => '255',
        'translated' => true
    ])
    @formField('input', [
        'label' => 'Mots-clés',
        'name' => 'website_keywords',
        'textLimit' => '255',
        'translated' => true
    ])
@stop

@section('fieldsets')

@endsection