@formField('input', [
    'translated' => true,
    'name' => 'title',
    'label' => 'Titre',
])

@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Contenu personnalisé',
    'maxlength' => 400,
    'note' => 'Hint message',
    'translated' => true,
])

@formField('select', [
    'name' => 'theme',
    'label' => 'Theme',
    'options' => [
        [
            'value' => 'classic-white',
            'label' => 'Classic / White'
        ],
        [
            'value' => 'classic-dark',
            'label' => 'Classic / Dark'
        ],
        [
            'value' => 'tangerine-titled',
            'label' => 'Classic / Tangerine'
        ],
        [
            'value' => 'tangerine-full',
            'label' => 'Tangerine / Full'
        ],
        [
            'value' => 'tangerine-yellow-titled',
            'label' => 'Tangerine / Yellow-Titled'
        ],
        [
            'value' => 'tangerine-dark-titled',
            'label' => 'Tangerine / Dark-Titled'
        ],
        [
            'value' => 'twitterblue-dark-titled',
            'label' => 'Twitter Blue / Dark-Titled'
        ],
        [
            'value' => 'twitterblue-light-titled',
            'label' => 'Twitter Blue / Light-Titled'
        ],
        [
            'value' => 'darkblue-titled',
            'label' => 'Darkblue-Titled'
        ],
        [
            'value' => 'darkblue-full',
            'label' => 'Darkblue / Full'
        ],
        [
            'value' => 'darkblue-twitterblue-titled',
            'label' => 'Darkblue / Twitterblue-Titled'
        ],
        [
            'value' => 'darkblue-red-titled',
            'label' => 'Darkblue / Red-Titled'
        ],
        [
            'value' => 'twitterblue-titled',
            'label' => 'Classic / TwitterBlue-Titled'
        ],
        [
            'value' => 'darkblue-full',
            'label' => 'Dark Blue / Full'
        ],
        [
            'value' => 'darklime',
            'label' => 'Dark Lime'
        ],
        [
            'value' => 'darklime-titled',
            'label' => 'Dark / Lime Titled'
        ],
        [
            'value' => 'pink-full',
            'label' => 'Pink / Full'
        ],
        [
            'value' => 'pink-twitterblue-titled',
            'label' => 'Pink / Twitterblue Titled'
        ],
        [
            'value' => 'pink-titled',
            'label' => 'Classic - Pink-Titled'
        ],
    ]
])