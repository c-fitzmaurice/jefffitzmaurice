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
            'full' => function ($page, $img) {
                return "https://res.cloudinary.com/fitz/jeff/{$img}";
            },
            'thumb' => function ($page, $img) {
                $thumb = preg_replace('/.jpg/u', '-tn.jpg', $img);
                return "https://res.cloudinary.com/fitz/image/upload/w_400,ar_1:1,c_fill,g_auto,e_art:hokusai/v1570663159/jeff/{$thumb}";
            },
            'link' => function ($page, $img) {
                $link_parts = explode('/', $img);
                return "/pieces/{$link_parts[0]}";
            },
            'slug' => function ($page, $img) {
                $link_parts = explode('/', $img);
                return $link_parts[0];
            }
        ],
        'full' => function ($page, $img) {
            return "https://res.cloudinary.com/fitz/jeff/{$img}";
        },
    ]
];
