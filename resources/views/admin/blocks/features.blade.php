@formField('input', [
    'translated' => true,
    'label' => 'Heading',
    'name' => 'heading',
])

@formField('repeater', [
    'name' => 'features',
    'type' => 'feature_item'
])