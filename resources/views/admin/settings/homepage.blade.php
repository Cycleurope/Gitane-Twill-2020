@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Blocks Homepage'
])

@section('contentFields')

    @formField('block_editor', [
        'blocks' => [
            'text', 'left_image_right_content', 
            'left_content_right_image', 
            'one_column_image_with_label', 
            'two_columns_images_with_labels', 
            'fullwidth_image_with_label', 
            'youtube_video'
            ]
    ])

@endsection