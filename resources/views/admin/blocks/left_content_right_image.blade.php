@formField('medias', [
    'name' => 'picture',
    'label' => 'Image',
    'note' => 'Largeur minimal de l\'image : 1200px',
])

@formField('input', [
    'translated' => true,
    'name' => 'side_title',
    'label' => 'Titre',
])

@formField('input', [
    'translated' => true,
    'name' => 'side_subtitle',
    'label' => 'Sous-titre',
])

@formField('input', [
    'translated' => true,
    'name' => 'side_content',
    'label' => 'Contenu',
    'type' => 'textarea',
    'required' => true
])

@formField('select', [
    'name' => 'block_theme',
    'label' => 'Theme',
    'options' => [
        [
            'value' => 'gblock-theme-default',
            'label' => 'Défaut (Fond Blanc)'
        ],
        [
            'value' => 'gblock-theme-nightblue',
            'label' => 'Night Blue'
        ],
        [
            'value' => 'gblock-theme-dark',
            'label' => 'Dark'
        ],
    ],
])