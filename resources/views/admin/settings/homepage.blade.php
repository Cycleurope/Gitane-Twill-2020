@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Bandeau Autopromo'
])

@section('contentFields')

@formField('input', [
    'label' => 'Titre du bandeau (FR)',
    'name' => 'autopromo_title_fr',
    'textLimit' => '160',
])
@formField('input', [
    'label' => 'Titre du bandeau (EN)',
    'name' => 'autopromo_title_en',
    'textLimit' => '160',
])

<hr>


@formField('wysiwyg', [
    'label' => 'Contenu du bandeau (FR)',
    'name' => 'autopromo_content_fr',
    'translated' => false
])

@formField('wysiwyg', [
    'label' => 'Contenu du bandeau (EN)',
    'name' => 'autopromo_content_en',
    'translated' => false
])

<hr>

@formField('input', [
    'label' => 'Lien',
    'name' => 'autopromo_link',
    'textLimit' => '160',
])

@formField('input', [
    'label' => 'Label du lien (FR)',
    'name' => 'autopromo_label_fr',
    'textLimit' => '160',
])

@formField('input', [
    'label' => 'Label du lien (EN)',
    'name' => 'autopromo_label_en',
    'textLimit' => '160',
])




@endsection