@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Réseaux Sociaux',
])


@section('contentFields')
    @formField('input', [
        'label' => 'Facebook',
        'name' => 'facebook',
        'textLimit' => '80'
    ])
    @formField('input', [
        'label' => 'Twitter',
        'name' => 'twitter',
        'textLimit' => '80'
    ])
    @formField('input', [
        'label' => 'Instagram',
        'name' => 'instagram',
        'textLimit' => '80'
    ])
    @formField('input', [
        'label' => 'Youtube',
        'name' => 'youtube',
        'textLimit' => '80'
    ])
@stop