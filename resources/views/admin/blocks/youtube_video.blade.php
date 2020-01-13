@formField('input', [
    'name' => 'video_url',
    'label' => 'URL de la vidéo Youtube' ,
])

@formField('medias' , [
    'name' => 'video_thumbnail' ,
    'label' => 'Miniature vidéo' ,
    'note' => 'Largeur minimale de l\'image : 1200px' ,
])

@formField('input' , [
    'name' => 'video_title' ,
    'label' => 'Titre de la vidéo' ,
    'translated' => true
])

@formField('wysiwyg' , [
    'name' => 'video_description' ,
    'label' => 'Description courte',
    'translated' => true,
])

@formField('medias' , [
    'name' => 'background_image' ,
    'label' => 'Image de fond' ,
    'note' => 'Largeur minimale de l\'image : 1200px' ,
])