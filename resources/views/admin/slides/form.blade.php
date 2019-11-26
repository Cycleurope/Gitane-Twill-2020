@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Visuel',
    'additionalFieldsets' => [
        ['fieldset' => 'link', 'label' => 'Lien'],
    ]
])

@section('contentFields')
    @formField('medias',[
        'name' => 'desktop_slide',
        'label' => 'Slide (Desktop)',
    ])

    @formField('medias',[
        'name' => 'tablet_slide',
        'label' => 'Slide (Tablette)',
    ])

    @formField('medias',[
        'name' => 'mobile_slide',
        'label' => 'Slide (Mobile)',
    ])
@stop

@section('fieldsets')

    <a17-fieldset title="Lien" id="link" :open="true">

        @formField('input', [
            'name' => 'link',
            'label' => 'Lien',
            'translated' => true,
            'maxlength' => 100
        ])

        @formField('input', [
            'name' => 'label',
            'label' => 'Label',
            'translated' => true,
            'maxlength' => 100
        ])

        @formField('checkbox' , [
            'name' => 'target_blank',
            'label' => 'Ouvrir dans un nouvel onglet.'
        ])

    </a17-fieldset>
@endsection
