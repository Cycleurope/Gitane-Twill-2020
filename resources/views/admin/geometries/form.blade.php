@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias',[
        'name' => 'picture',
        'label' => 'Dessin de la géometrie',
    ])

    @formField('select', [
        'name' => 'geometry_type',
        'label' => 'Type de géométrie',
        'unpack' => true,
        'options' => [
            [
                'value' => 'classic',
                'label' => 'Classique'
            ],
            [
                'value' => 'tandem',
                'label' => ' Tandem'
            ]
        ]
    ])

    @formField('block_editor', [
        'blocks' => ['geometry', 'geometry_tandem']
    ])
@stop
