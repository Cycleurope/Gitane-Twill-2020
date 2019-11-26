@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Contenu principal'
])


@section('contentFields')
    @formField('input', [
        'name' => 'color',
        'label' => 'Coloris',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'color_picture',
        'label' => 'Picto Couleur',
    ])

    @formField('input', [
        'name' => 'decal',
        'label' => 'Décoration',
        'translated' => true,
        'maxlength' => 100
    ])
@stop
