@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Global',
    'additionalFieldsets' => [
        ['fieldset' => 'home', 'label' => 'Home'],
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
])

@section('contentFields')
    @formField('input', [
        'label' => 'Global website title prefix',
        'name' => 'title_prefix',
        'textLimit' => '80',
        'translated' => true
    ])
    @formField('input', [
        'label' => 'Global website title prefix',
        'name' => 'title_suffix',
        'textLimit' => '80',
        'translated' => true
    ])
    @formField('input', [
        'label' => 'Global website description prefix',
        'name' => 'description_prefix',
        'textLimit' => '80',
        'translated' => true
    ])
    @formField('input', [
        'label' => 'Global website description suffix',
        'name' => 'description_suffix',
        'textLimit' => '80',
        'translated' => true
    ])
@stop

@section('fieldsets')
    <a17-fieldset   title="Home" id="home" :open="true">
            @formField('input', [
                'label' => 'Homepage title',
                'name' => 'homepage_title',
                'textLimit' => '80',
                'translated' => true
            ])
            @formField('input', [
                'label' => 'Homepage description',
                'name' => 'homepage_description',
                'textLimit' => '80',
                'translated' => true,
                'type' => 'textarea'
            ])
    </a17-fieldset>
    <a17-fieldset   title="Stores" id="stores" :open="true">
            @formField('input', [
                'label' => 'Stores title',
                'name' => 'storespage_title',
                'textLimit' => '80',
                'translated' => true
            ])
            @formField('input', [
                'label' => 'Stores description',
                'name' => 'storespage_description',
                'textLimit' => '80',
                'translated' => true,
                'type' => 'textarea'
            ])
    </a17-fieldset>
@endsection