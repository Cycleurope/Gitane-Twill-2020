@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'frameset', 'label' => 'Cadre'],
        ['fieldset' => 'electric', 'label' => 'e-Specs'],
        ['fieldset' => 'transmission' , 'label' => 'Transmission'],
        ['fieldset' => 'wheels' , 'label' => 'Roues'] ,
        ['fieldset' => 'components' , 'label' => 'Composants'] ,
        ['fieldset' => 'equipements' , 'label' => 'Equipements'] ,
        ['fieldset' => 'other' , 'label' => 'Autres'] ,
        ['fieldset' => 'geometries' , 'label' => 'Géométries'] ,
        ['fieldset' => 'accessories' , 'label' => 'Accessoires'] ,
    ]
])
@section('contentFields')

    @formField('browser' , [
        'moduleName' => 'families',
        'name' => 'families',
        'label' => 'Famille',
        'max' => 1
    ])

    @formField('input' , [
        'name' => 'reference' ,
        'label' => 'Référence' ,
        'translated' => false ,
        'maxlength' => 100
    ])

    @formField('input' , [
        'name' => 'name' ,
        'label' => 'Nom' ,
        'translated' => true ,
        'maxlength' => 100
    ])

    @formField('input' , [
        'name' => 'subname' ,
        'label' => 'Nom secondaire' ,
        'translated' => true ,
        'maxlength' => 100
    ])

    @formField('medias' ,[
        'name' => 'desktop_cover' ,
        'label' => 'Couverture (Desktop)' ,
    ])

    @formField('medias' ,[
        'name' => 'tablet_cover' ,
        'label' => 'Couverture (Tablet)' ,
    ])

    @formField('medias' ,[
        'name' => 'mobile_cover' ,
        'label' => 'Couverture (Mobile)' ,
    ])

    @formField('wysiwyg' , [
        'name' => 'description' ,
        'label' => 'Description' ,
        'maxlength' => 400 ,
        'note' => 'Hint message' ,
        'translated' => true
    ])

    @formField('medias' , [
        'name' => 'gallery' ,
        'label' => 'Gallery' ,
        'max' => 5 ,
        'note' => 'Minimum image width: 1500px'
    ])

    @formField('checkbox' , [
        'name' => 'price_from' ,
        'label' => 'A partir de ...'
    ])

    @formField('input' , [
        'name' => 'public_price' ,
        'label' => 'Prix Public' ,
        'maxlength' => 16
    ])

    @formField('select' , [
        'name' => 'datasheet_theme' ,
        'label' => 'Spécifications Techniques > Thème' ,
        'placeholder' => 'Sélectionnez un thème ...' ,
        'options' => [
            [
                'value' => 'datasheet-default' ,
                'label' => 'Classic - Noir'
            ] ,
            [
                'value' => 'datasheet-darkblue-twitterblue' ,
                'label' => 'Darkblue / TwitterBlue'
            ] ,
            [
                'value' => 'datasheet-darkblue-red' ,
                'label' => 'Darkblue / Red'
            ] ,
            [
                'value' => 'datasheet-tangerine-yellow' ,
                'label' => 'Tangerine / Yellow'
            ] ,
            [
                'value' => 'datasheet-tangerine' ,
                'label' => 'Tangerine / White'
            ] ,
            [
                'value' => 'datasheet-steel-darkblue' ,
                'label' => 'Steel / DarkBlue'
            ] ,
            [
                'value' => 'datasheet-dark-lime' ,
                'label' => 'Dark / Lime'
            ]
        ]
    ])

    @formField('select' , [
        'name' => 'geometries_theme' ,
        'label' => 'Géométries > Thème' ,
        'placeholder' => 'Sélectionnez un thème ...' ,
        'options' => [
            [
                'value' => 'geometries-default' ,
                'label' => 'Classic - Noir'
            ] ,
            [
                'value' => 'geometries-darkblue-twitterblue' ,
                'label' => 'Darkblue / TwitterBlue'
            ] ,
            [
                'value' => 'geometries-darkblue-red' ,
                'label' => 'Darkblue / Red'
            ] ,
            [
                'value' => 'geometries-tangerine-yellow' ,
                'label' => 'Tangerine / Yellow'
            ] ,
            [
                'value' => 'geometries-tangerine' ,
                'label' => 'Tangerine / White'
            ] ,
            [
                'value' => 'geometries-steel-darkblue' ,
                'label' => 'Steel / DarkBlue'
            ] ,
            [
                'value' => 'geometries-dark-lime' ,
                'label' => 'Dark / Lime'
            ]
        ]
    ])

    @formField('block_editor' , [
        'blocks' => ['text' , 'left_image_right_content' , 'left_content_right_image' , 'one_column_image_with_label' , 'two_columns_images_with_labels' , 'fullwidth_image_with_label' , 'youtube_video']
    ])

@stop

@section('fieldsets')
    <a17-fieldset title="Cadre" id="frameset" :open="true">

        @formField('input' , [
            'name' => 'frame' ,
            'label' => 'Cadre' ,
            'translated' => true ,
            'maxlength' => 100
        ])

        @formField('input' , [
            'name' => 'fork' ,
            'label' => 'Fourche' ,
            'translated' => true ,
            'maxlength' => 100
        ])

        @formField('input' , [
            'name' => 'rear_suspension' ,
            'label' => 'Suspension' ,
            'translated' => true ,
            'maxlength' => 100
        ])
    
    </a17-fieldset>

    <a17-fieldset   title="Spécifications Electriques" id="electric" :open="true">

        @formField('input' , [
            'name' => 'engine' ,
            'label' => 'Motorisation' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'battery' ,
            'label' => 'Batterie / Capacité' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'display' ,
            'label' => 'Display / Console' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'distance_range' ,
            'label' => 'Autonomie' ,
            'translated' => true ,
            'maxlength' => 100
        ])

    </a17-fieldset>

    <a17-fieldset   title="Roues" id="wheels" :open="true">

        @formField('input' , [
            'name' => 'rims' ,
            'label' => 'Jantes' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'tires' ,
            'label' => 'Pneumatiques' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'hubs' ,
            'label' => 'Moyeux' ,
            'translated' => true ,
            'maxlength' => 100
        ])

    </a17-fieldset>

    <a17-fieldset   title="Transmission" id="transmission" :open="true">

        @formField('input' , [
            'name' => 'transmission' ,
            'label' => 'Transmission' ,
            'translated' => true ,
            'hint' => 'A utiliser essentiellement pour Junior',
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'shifters' ,
            'label' => 'Manettes de dérailleurs' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'rear_derailleur' ,
            'label' => 'Dérailleur arrière' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'front_derailleur' ,
            'label' => 'Dérailleur avant' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'crankset' ,
            'label' => 'Pédalier' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'cassette' ,
            'label' => 'Cassette' ,
            'translated' => true ,
            'maxlength' => 100
        ])

    </a17-fieldset>

    <a17-fieldset   title="Composants" id="components" :open="true">

        @formField('input' , [
            'name' => 'saddle' ,
            'label' => 'Selle' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'seatpost' ,
            'label' => 'Tube de selle' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'handlebars' ,
            'label' => 'Cintre' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'stem' ,
            'label' => 'Potence' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'brakes' ,
            'label' => 'Freins' ,
            'translated' => true ,
            'maxlength' => 100
        ])

        @formField('input' , [
            'name' => 'pedals' ,
            'label' => 'Pédales' ,
            'translated' => true ,
            'maxlength' => 155
        ])

    </a17-fieldset>

    <a17-fieldset   title="Equipements" id="equipements" :open="true">

        @formField('input' , [
            'name' => 'mudguards' ,
            'label' => 'Gardes-boues' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'racks' ,
            'label' => 'Portes-bagages' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'chainguard' ,
            'label' => 'Pare-chaîne' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'stand' ,
            'label' => 'Béquille' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'lightings' ,
            'label' => 'Eclairage' ,
            'translated' => true ,
            'maxlength' => 100
        ])
        @formField('input' , [
            'name' => 'plus' ,
            'label' => 'Plus' ,
            'translated' => true ,
            'maxlength' => 100
        ])

    </a17-fieldset>

    <a17-fieldset   title="Autres" id="other" :open="true">

        @formField('browser' , [
            'moduleName' => 'colors' ,
            'name' => 'colors' ,
            'label' => 'Coloris' ,
            'max' => 10
        ])
        @formField('browser' , [
            'moduleName' => 'sizes' ,
            'name' => 'sizes' ,
            'label' => 'Tailles' ,
            'max' => 10
        ])
        @formField('input' , [
            'name' => 'weight' ,
            'label' => 'Poids' ,
            'translated' => false ,
            'maxlength' => 100
        ])

    </a17-fieldset>

    <a17-fieldset   title="Géométries" id="geometries" :open="true">
        @formField('browser' , [
            'moduleName' => 'geometries' ,
            'name' => 'geometries' ,
            'label' => 'Géometries associées' ,
            'max' => 10
        ])
    </a17-fieldset>

    <a17-fieldset   title="Accessoires" id="accessories" :open="true">
        @formField('browser' , [
            'moduleName' => 'accessories' ,
            'name' => 'accessories' ,
            'label' => 'Accessoires' ,
            'max' => 10
        ])
    </a17-fieldset>

@endsection