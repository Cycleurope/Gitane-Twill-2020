@extends('twill::layouts.form', [
    'contentFieldsetLabel' => 'Contenu principal',
    'additionalFieldsets' => [
        ['fieldset' => 'custom_content', 'label' => 'Contenu personnalisé'],
        ['fieldset' => 'seo', 'label' => 'SEO'],
    ]
])

@section('contentFields')

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Couverture',
    ])
    
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Contenu',
        'translated' => true,
        'toolbarOptions' => [
            'bold', 'italic', 'underline', 'strike', 'link', 'blockquote', 'h2', ['header' => '3'], ['header' => '4'], 'list-ordered', 'list-unordered',
        ]
    ])
@stop

@section('fieldsets')
    <a17-fieldset title="Contenu personalisé" id="custom_layout" :open="true">
        @formField('block_editor', [
            'blocks' => ['text', 'left_image_with_text', 'right_image_with_text', 'one_column_image_with_label', 'two_columns_images_with_labels', 'three_columns_images_with_labels']
        ])
    </a17-fieldset>

    <a17-fieldset title="SEO" id="seo" :open="false">

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
    
    </a17-fieldset>
@endsection
