@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Code Analytics',
])

@section('contentFields')
    @formField('input', [
        'label' => 'Code JS Analytics',
        'name' => 'title_prefix',
        'textLimit' => '80',
        'type' => 'textarea',
        'rows' => 12,
        'translated' => false
    ])
@stop