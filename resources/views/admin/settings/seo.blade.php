@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Global',
    'additionalFieldsets' => [
        ['fieldset' => 'home', 'label' => 'Home'],
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
])

@section('contentFields')
    @formField('input', [
        'label' => 'Titre du site (FR)',
        'name' => 'website_title_fr',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Titre du site (EN)',
        'name' => 'website_title_en',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Suffixe Global (FR)',
        'name' => 'title_suffix_fr',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Suffixe global (EN)',
        'name' => 'title_suffix_en',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Meta Description (FR)',
        'name' => 'meta_description_fr',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Meta Description (EN)',
        'name' => 'meta_description_en',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Meta Keywords (FR)',
        'name' => 'meta_keywords_fr',
        'textLimit' => '160',
    ])
    @formField('input', [
        'label' => 'Meta Keywords (EN)',
        'name' => 'meta_keywords_en',
        'textLimit' => '160',
    ])
@stop
