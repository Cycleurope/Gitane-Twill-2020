@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'geolocation', 'label' => 'Geolocalisation'],
    ]
])

@section('contentFields')

    @formField('medias',[
        'name' => 'featured_picture',
        'label' => 'Photo',
    ])

    @formField('browser' , [
        'moduleName' => 'countries',
        'name' => 'countries',
        'label' => 'Pays',
        'max' => 1
    ])

    @formField('select', [
        'name' => 'dep',
        'label' => 'Département',
        'placeholder' => 'Selectionner un département',
        'options' => [
            ['value' => 1, 'label' => '(1) Ain'],
            ['value' => 2, 'label' => '(2) Aisne'],
            ['value' => 3, 'label' => '(3) Allier'],
            ['value' => 4, 'label' => '(4) Alpes-de-Haute-Provence'],
            ['value' => 5, 'label' => '(5) Hautes-Alpes'],
            ['value' => 6, 'label' => '(6) Alpes-Maritimes'],
            ['value' => 7, 'label' => '(7) Ardèche'],
            ['value' => 8, 'label' => '(8) Ardennes'],
            ['value' => 9, 'label' => '(9) Ariège'],

            ['value' => 10, 'label' => '(10) Aube'],
            ['value' => 11, 'label' => '(11) Aude'],
            ['value' => 12, 'label' => '(12) Aveyron'],
            ['value' => 13, 'label' => '(13) Bouches-du-Rhône'],
            ['value' => 14, 'label' => '(14) Calvados'],
            ['value' => 15, 'label' => '(15) Cantal'],
            ['value' => 16, 'label' => '(16) Charente'],
            ['value' => 17, 'label' => '(17) Charente-Maritime'],
            ['value' => 18, 'label' => '(18) Cher'],
            ['value' => 19, 'label' => '(19) Corrèze'],

            ['value' => 20, 'label' => '(20) Corse'],
            ['value' => 21, 'label' => '(21) Côte d\'Or'],
            ['value' => 22, 'label' => '(22) Côtes d\'Armor'],
            ['value' => 23, 'label' => '(23) Creuse'],
            ['value' => 24, 'label' => '(24) Dordogne'],
            ['value' => 25, 'label' => '(25) Doubs'],
            ['value' => 26, 'label' => '(26) Drôme'],
            ['value' => 27, 'label' => '(27) Eure'],
            ['value' => 28, 'label' => '(28) Eure-et-Loir'],
            ['value' => 29, 'label' => '(29) Finistère'],
            
            ['value' => 30, 'label' => '(30) Gard'],
            ['value' => 31, 'label' => '(31) Haute-Garonne'],
            ['value' => 32, 'label' => '(32) Gers'],
            ['value' => 33, 'label' => '(33) Gironde'],
            ['value' => 34, 'label' => '(34) Hérault'],
            ['value' => 35, 'label' => '(35) Ille-et-Vilaine'],
            ['value' => 36, 'label' => '(36) Indre'],
            ['value' => 37, 'label' => '(37) Indre-et-Loire'],
            ['value' => 38, 'label' => '(38) Isère'],
            ['value' => 39, 'label' => '(39) Jura'],

            ['value' => 40, 'label' => '(40) Landes'],
            ['value' => 41, 'label' => '(41) Loir-et-Cher'],
            ['value' => 42, 'label' => '(42) Loire'],
            ['value' => 43, 'label' => '(43) Haute-Loire'],
            ['value' => 44, 'label' => '(44) Loire-Atlantique'],
            ['value' => 45, 'label' => '(45) Loiret'],
            ['value' => 46, 'label' => '(46) Lot'],
            ['value' => 47, 'label' => '(47) Lot-et-Garonne'],
            ['value' => 48, 'label' => '(48) Lozère'],
            ['value' => 49, 'label' => '(49) Maine-et-Loire'],

            ['value' => 50, 'label' => '(50) Manche'],
            ['value' => 51, 'label' => '(51) Marne'],
            ['value' => 52, 'label' => '(52) Haute-Marne'],
            ['value' => 53, 'label' => '(53) Mayenne'],
            ['value' => 54, 'label' => '(54) Meurthe-et-Moselle'],
            ['value' => 55, 'label' => '(55) Meuse'],
            ['value' => 56, 'label' => '(56) Morbihan'],
            ['value' => 57, 'label' => '(57) Moselle'],
            ['value' => 58, 'label' => '(58) Nièvre'],
            ['value' => 59, 'label' => '(59) Nord'],

            ['value' => 60, 'label' => '(60) Oise'],
            ['value' => 61, 'label' => '(61) Orne'],
            ['value' => 62, 'label' => '(62) Pas-de-Calais'],
            ['value' => 63, 'label' => '(63) Puy-de-Dôme'],
            ['value' => 64, 'label' => '(64) Pyrénées-Atlantiques'],
            ['value' => 65, 'label' => '(65) Hautes-Pyrénées'],
            ['value' => 66, 'label' => '(66) Pyrénées-Orientales'],
            ['value' => 67, 'label' => '(67) Bas-Rhin'],
            ['value' => 68, 'label' => '(68) Haut-Rhin'],
            ['value' => 69, 'label' => '(69) Rhône'],

            ['value' => 70, 'label' => '(70) Haute-Saône'],
            ['value' => 71, 'label' => '(71) Saône-et-Loire'],
            ['value' => 72, 'label' => '(72) Sarthe'],
            ['value' => 73, 'label' => '(73) Savoie'],
            ['value' => 74, 'label' => '(74) Haute-Savoie'],
            ['value' => 75, 'label' => '(75) Paris'],
            ['value' => 76, 'label' => '(76) Seine-Maritime'],
            ['value' => 77, 'label' => '(77) Seine-et-Marne'],
            ['value' => 78, 'label' => '(78) Yvelines'],
            ['value' => 79, 'label' => '(79) Deux-Sèvres'],

            ['value' => 80, 'label' => '(80) Somme'],
            ['value' => 81, 'label' => '(81) Tarn'],
            ['value' => 82, 'label' => '(82) Tarn-et-Garonne'],
            ['value' => 83, 'label' => '(83) Var'],
            ['value' => 84, 'label' => '(84) Vaucluse'],
            ['value' => 85, 'label' => '(85) Vendée'],
            ['value' => 86, 'label' => '(86) Vienne'],
            ['value' => 87, 'label' => '(87) Haute-Vienne'],
            ['value' => 88, 'label' => '(88) Vosges'],
            ['value' => 89, 'label' => '(89) Yonne'],

            ['value' => 90, 'label' => '(90) Territoire-de-Belfort'],
            ['value' => 91, 'label' => '(91) Essonne'],
            ['value' => 92, 'label' => '(92) Hauts-de-Seine'],
            ['value' => 93, 'label' => '(93) Seine-Saint-Denis'],
            ['value' => 94, 'label' => '(94) Val-De-Marne'],
            ['value' => 95, 'label' => '(95) Val d\'Oise'],
            ['value' => 971, 'label' => '(971) Guadeloupe'],
            ['value' => 972, 'label' => '(972) Martinique'],
            ['value' => 973, 'label' => '(973) Guyane'],
            ['value' => 974, 'label' => '(974) La Réunion'],
            ['value' => 976, 'label' => '(976) Mayotte'],

        ]
    ])

    @formField('input', [
        'name' => 'code',
        'label' => 'Code Client',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('checkbox', [
        'name' => 'velox',
        'label' => 'Réseau Velo & Oxygen',
    ])

    @formField('input', [
        'name' => 'shopname',
        'label' => 'Nom du point de vente',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'address1',
        'label' => 'Adresse - Ligne 1',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'address2',
        'label' => 'Adresse - Ligne 2',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'postalcode',
        'label' => 'Code Postal',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'city',
        'label' => 'Ville',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'phone',
        'label' => 'Téléphone',
        'translated' => false,
        'maxlength' => 20
    ])

    @formField('input', [
        'name' => 'email',
        'label' => 'Adresse e-mail',
        'translated' => false,
        'maxlength' => 200
    ])

@stop

@section('fieldsets')
<a17-fieldset   title="Géolocalisation" id="geolocation" :open="true">
    @formField('input', [
        'name' => 'latitude',
        'label' => 'Latitude',
        'translated' => false,
        'maxlength' => 200
    ])
    @formField('input', [
        'name' => 'longitude',
        'label' => 'Longitude',
        'translated' => false,
        'maxlength' => 200
    ])
</a17-fieldset>
@endsection