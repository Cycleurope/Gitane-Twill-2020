@extends('twill::layouts.settings', [
    'contentFieldsetLabel' => 'Affichage',
    'additionalFieldsets' => [
        ['fieldset' => 'stores', 'label' => 'Stores'],
    ],
])

@section('contentFields')

@endsection

@section('fieldsets')
<a17-fieldset title="Distributeurs" id="stores" :open="true">

    @formField('checkbox', [
        'label' => 'Afficher les distributeurs dans le monde.',
        'name' => 'display_global_stores',
    ])

</a17-fieldset>
@endsection