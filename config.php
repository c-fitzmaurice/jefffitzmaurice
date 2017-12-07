<?php

return [
    'production' => false,
    'url' => 'https://jeff.dev/',

    'site_name' => 'Fitz-Maurice Illustration',
    'name' => 'Fitz-Maurice',
    'illus' => 'Illustration',

    'email_comcast' => 'jfitz-maurice@comcast.net',
    'email_gmail' => 'fitz.maurice.jeff@gmail.com',

    'collections' => [
        'stylistic' => [
            'path' => '{collection}/{-filename}'
        ],
        'realistic' => [
            'path' => '{collection}/{-filename}'
        ],
        'food-and-packaging' => [
            'path' => '{collection}/{-filename}'
        ],
        'websites' => [
            'path' => '{collection}/{-filename}'
        ],
        'type-and-characters' => [
            'path' => '{collection}/{-filename}'
        ],
    ],
    'links' => function ($page, $collection_name) {
        return ucwords(str_replace('and', '&', str_replace('-', ' ', $collection_name)));
    },
];
