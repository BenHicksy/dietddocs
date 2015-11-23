<?php
return [
   'settings' => [
        //Twig
        'view' => [
            'template_path' => 'app/templates',
            'twig' => [
                'cache' => 'cache/twig',
                'debug' => true,
            ],
        ],
        //whoops
       'debug' => true,

    ],
];