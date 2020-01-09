@formField('medias', [
    'name' => 'feature',
    'label' => 'Image',
    'note' => 'Largeur minimal de l\'image : 1200px',
])

@formField('input', [
    'translated' => true,
    'name' => 'title',
    'label' => 'Titre',
])

@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Contenu de la feature',
    'maxlength' => 400,
    'note' => 'Description Courte de la feature',
    'translated' => true,
])

