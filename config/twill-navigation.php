<?php

return [
    'featured' => [
        'title' => 'Mis en avant' ,
        'route' => 'admin.featured.homepage' ,
    ] ,
    'book' => [
        'title' => 'Catalogue' ,
        'route' => 'admin.book.bikes.index' ,
        'primary_navigation' => [
            'families' => [
                'title' => 'Familles' ,
                'module' => true
            ],
            'bikes' => [
                'title' => 'Vélos' ,
                'module' => true
            ],
            'colors' => [
                'title' => 'Coloris' ,
                'module' => true
            ],
            'sizes' => [
                'title' => 'Tailles' ,
                'module' => true
            ] ,
            'geometries' => [
                'title' => 'Geometries' ,
                'module' => true
            ] ,
            'accessories' => [
                'title' => 'Accessoires' ,
                'module' => true
            ] ,
            'certificates' => [
                'title' => 'Certificats' ,
                'module' => true
            ] ,
        ] ,
    ] ,
    'slides' => [
        'title' => 'Slides' ,
        'module' => true
    ] ,
    'stores' => [
        'title' => 'Distributeurs' ,
        'module' => true
    ] ,
    'pages' => [
        'title' => 'Pages' ,
        'module' => true
    ] ,
    'settings' => [
        'title' => 'Paramètres' ,
        'route' => 'admin.settings' ,
        'params' => ['section' => 'seo'] ,
        'primary_navigation' => [
            'homepage' => [
                'title' => 'Accueil' ,
                'route' => 'admin.settings' ,
                'params' => ['section' => 'homepage']
            ] ,
            'seo' => [
                'title' => 'SEO' ,
                'route' => 'admin.settings' ,
                'params' => ['section' => 'seo']
            ] ,
            'social' => [
                'title' => 'Réseaux Sociaux' ,
                'route' => 'admin.settings' ,
                'params' => ['section' => 'social']
            ] ,
            'analytics' => [
                'title' => 'Analytics' ,
                'route' => 'admin.settings' ,
                'params' => ['section' => 'analytics']
            ] ,
            'display' => [
                'title' => 'Affichage' ,
                'route' => 'admin.settings' ,
                'params' => ['section' => 'display']
            ]
        ]
    ] ,
    'navigation' => [
        'title' => 'Navigation' ,
        'route' => 'admin.featured.homenav' ,
    ] ,

]  ;
