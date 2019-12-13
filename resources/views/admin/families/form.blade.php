@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'meta_description',
        'routePrefix' => 'book',
        'label' => 'Meta Description',
        'translated' => true,
        'type' => 'textarea',
        'maxlength' => 100
    ])
    @formField('input', [
        'label' => 'Meta Keywords',
        'name' => 'meta_keywords',
        'translated' => true,
    ])
    <hr>
    @formField('input', [
        'name' => 'description',
        'routePrefix' => 'book',
        'label' => 'Description',
        'translated' => true,
        'type' => 'textarea',
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Couverture',
    ])

    @formField('medias', [
        'name' => 'tablet_cover',
        'label' => 'Couverture Tablette',
    ])

    @formField('medias', [
        'name' => 'mobile_cover',
        'label' => 'Couverture Mobile',
    ])
    @formField('medias', [
        'name' => 'tile',
        'label' => 'Tuile',
    ])

    @formField('input', [
        'label' => 'Position',
        'name' => 'position',
    ])
@stop
