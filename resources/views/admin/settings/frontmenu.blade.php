@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Navigation Client',
])

@section('contentFields')

    @formField('browser', [
        'moduleName' => 'families',
        'name' => 'frontmenu',
        'label' => 'Navigation produits',
        'max' => 10
    ])

    @formField('browser', [
        'moduleName' => 'pages',
        'name' => 'pages',
        'label' => 'Navigation Pages',
        'max' => 10
    ])

@endsection