@formField('medias', [
    'name' => 'default_picture',
    'label' => 'Image FullWidth (Desktop) (Non-cropped)',
    'note' => 'Largeur minimal de l\'image : 1200px',
])

<p>L'image "Desktop Picture" sera utilisée à la place de "Default Picture" si le champ est renseigné.</p>
@formField('medias', [
    'name' => 'desktop_picture',
    'label' => 'Image FullWidth (Desktop)',
    'note' => 'Largeur minimal de l\'image : 1200px',
])


@formField('medias', [
    'name' => 'tablet_picture',
    'label' => 'Image FullWidth (Tablette)',
    'note' => 'Largeur minimal de l\'image : 1200px',
])


@formField('medias', [

    'name' => 'mobile_picture',
    'label' => 'Image FullWidth (Mobile)',
    'note' => 'Largeur minimal de l\'image : 1200px',
])

@formField('input', [
    'translated' => true,
    'name' => 'label',
    'label' => 'Label',
])