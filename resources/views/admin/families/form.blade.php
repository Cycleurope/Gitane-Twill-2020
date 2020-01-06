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
        'name' => 'tile',
        'label' => 'Tuile',
    ])

    @formField('input', [
        'label' => 'Position',
        'name' => 'position',
    ])

@stop

@section('fieldsets')

<a17-fieldset title="Documents" id="documents" :open="true">
    @formField('files', [
        'name' => 'book',
        'label' => 'Catalogue',
        'note' => 'Le catalogue doit être au format PDF.'
    ])
    </a17-fieldset>
@endsection
