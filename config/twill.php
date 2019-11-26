<?php

return [
    'enabled' => [
        'buckets' => true ,
        'settings' => true ,
        'activitylog' => true ,
        'dashboard' => true ,
        'search' => true
    ] ,
    'buckets' => [
        'homepage' => [
            'name' => 'Home' ,
            'buckets' => [
                'home_primary_featured' => [
                    'name' => 'Mis en avant' , 
                    'bucketables' => [
                        [
                            'module' => 'bikes' ,
                            'route' => 'admin.bikes.index' ,
                            'name' => 'Bikes' ,
                            'scopes' => ['published' => true]
                        ]
                    ] ,
                    'max_items' => 4
                ]
            ]
        ] ,
        'homenav' => [
            'name' => 'Navigation Client' ,
            'buckets' => [
                'primary_navigation' => [
                    'name' => 'Navigation Client' , 
                    'bucketables' => [
                    [
                        'module' => 'families' ,
                        'route' => 'admin.families.index' ,
                        'name' => 'Familles' ,
                        'scopes' => ['published' => true]
                    ] ,
                    [
                        'module' => 'pages' ,
                        'route' => 'admin.pages.index' ,
                        'name' => 'Pages' ,
                        'scopes' => ['published' => true]
                    ]
                ] ,
                'max_items' => 8 ,
            ] ,
                'pages_navigation' => [
                    'name' => 'Navigation Footer - Pages' , 
                    'bucketables' => [
                    [
                        'module' => 'pages' ,
                        'route' => 'admin.pages.index' ,
                        'name' => 'Pages' ,
                        'scopes' => ['published' => true]
                    ]
                ] ,
                'max_items' => 8 ,
                ]
            ]
        ]

    ] ,
    'dashboard' => [
        'modules' => [
            'bikes' => [
                'name' => 'bikes' ,
                'label' => 'Vélos' ,
                'routePrefix' => 'book' ,
                'count' => true ,
                'create' => true ,
                'activity' => true ,
                'search' => true ,
                'global_search' => true ,
                'search_fields' => ['name' , 'title' , 'reference'] ,
            ] ,
            'App\Models\Size' => [
                'name' => 'sizes' ,
                'label' => 'Tailles' ,
                'routePrefix' => 'book' ,
                'count' => true ,
                'create' => true ,
                'activity' => true ,
                'search' => true ,
                'search_fields' => ['name'] ,
            ] ,
            'App\Models\Color' => [
                'name' => 'colors' ,
                'label' => 'Coloris' ,
                'routePrefix' => 'book' ,
                'count' => true ,
                'create' => true ,
                'activity' => true ,
                'search' => true ,
                'search_fields' => ['name'] ,
            ] ,
            'App\Models\Accessory' => [
                'name' => 'accessories' ,
                'label' => 'Accessoires' ,
                'routePrefix' => 'book' ,
                'count' => true ,
                'create' => true ,
                'activity' => true ,
                'search' => true ,
                'search_fields' => ['name'] ,
            ] ,
            'App\Models\Store' => [
                'name' => 'stores' ,
                'label' => 'Distributeurs' ,
                'count' => true ,
                'create' => true ,
                'activity' => true ,
                'search' => true ,
                'search_fields' => ['name'] ,
            ]
        ]
    ] ,
    'block_editor' => [
        'block_single_layout' => 'layouts.block' ,
        'block_views_path' => 'site.blocks' ,
        'blocks' => [
            'text' => [
                'title' => 'Content' ,
                'icon' => 'text' ,
                'component' => 'a17-block-text' ,
            ] ,
            'left_image_right_content' => [
                'title' => 'Image | Texte' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-left_image_right_content' ,
            ] ,
            'left_content_right_image' => [
                'title' => 'Texte | Image' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-left_content_right_image' ,
            ] ,
            'fullwidth_image_with_label' => [
                'title' => 'Image Fullwidth' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-fullwidth_image_with_label' ,
            ] ,
            'two_columns_images_with_labels' => [
                'title' => 'Image | Image' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-two_columns_images_with_labels' ,
            ] ,
            'geometry' => [
                'title' => 'Géométrie' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-geometry' ,
            ] ,
            'geometry_tandem' => [
                'title' => 'Géométrie Tandem' ,
                'icon' => 'image-text' ,
                'component' => 'a17-block-geometry_tandem' ,
            ] ,
            'families' => [
                'title' => 'Familles' ,
                'component' => 'a17-block-families' ,
            ] ,
            'features' => [
                'title' => 'Features' ,
                'icon' => 'text' ,
                'component' => 'a17-block-features' ,
            ] ,
            'youtube_video' => [
                'title' => 'Vidéo Youtube' ,
                'icon' => 'text' ,
                'component' => 'a17-block-youtube_video' ,
            ] ,
        ] ,
        'repeaters' => [
            'feature_item' => [
                'title' => 'Feature' ,
                'trigger' => 'Add Feature' ,
                'component' => 'a17-block-feature_item' ,
                'max' => 4
            ]
        ] ,
        'browser_route_prefixes' => [
            'families' => 'book' ,
        ] ,
        'crops' => [
            'picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'left_picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'right_picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'desktop_picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'tablet_picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'mobile_picture' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ] ,
                ] ,
                'squared' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 16 ,
                    ] ,
                ] ,
            ] ,
            'gallery' => [
                'default' => [
                    [
                        'name' => 'landscape' ,
                        'ratio' => 16 / 9 ,
                    ]
                ]
            ] ,
        ] ,
    ] ,
    'file_library' => [
        'disk' => 'public',
        'endpoint_type' => 'local',
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH'),
        'file_service' => A17\Twill\Services\FileLibrary\Disk::class, ///<------
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['woff', 'pdf'],
    ],
]  ;
