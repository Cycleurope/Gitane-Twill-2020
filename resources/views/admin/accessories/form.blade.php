@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Contenu principal',
])

@section('contentFields')
    @formField('input', [
        'name' => 'reference',
        'label' => 'Reference',
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'name',
        'label' => 'Nom',
        'maxlength' => 100,
        'translated' => true,
    ])

    @formField('medias',[
        'name' => 'picture',
        'label' => 'Photo',
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => ['bold', 'italic', 'underline', 'list-ordered', 'list-unordered'],
        'placeholder' => 'Case study text',
        'maxlength' => 200,
        'note' => 'Hint message',
        'translated' => true,
    ])

@stop
