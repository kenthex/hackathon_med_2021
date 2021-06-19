<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon.jpg',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/icon.jpg',
            '750x1334' => '/images/icons/icon.jpg',
            '828x1792' => '/images/icons/icon.jpg',
            '1125x2436' => '/images/icons/icon.jpg',
            '1242x2208' => '/images/icons/icon.jpg',
            '1242x2688' => '/images/icons/icon.jpg',
            '1536x2048' => '/images/icons/icon.jpg',
            '1668x2224' => '/images/icons/icon.jpg',
            '1668x2388' => '/images/icons/icon.jpg',
            '2048x2732' => '/images/icons/icon.jpg',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon.jpg",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
