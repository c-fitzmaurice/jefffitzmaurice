<?php

return [
    'production' => false,
    'url' => 'https://jefffitzmaurice.test/',

    'site_name' => 'Fitz-Maurice Digital Illustration',
    'name' => 'Fitz-Maurice',
    'illus' => 'Digital Illustration',

    'email_comcast' => 'jfitz-maurice@comcast.net',
    'email_gmail' => 'fitz.maurice.jeff@gmail.com',

    'collections' => [
        'pieces' => [
            'pieces' => 'pieces/{filename}',
            'thumb' => function ($page, $img) {
                return preg_replace('/.jpg/u', '-tn.jpg', $img);
            },
            'link' => function ($page, $img) {
                $link_parts = explode('/', $img);
                return "/pieces/{$link_parts[2]}";
            },
            'slug' => function ($page, $img) {
                $link_parts = explode('/', $img);
                return $link_parts[2];
            }
        ],
    ]
];
