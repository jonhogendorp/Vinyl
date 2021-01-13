<?php

return [
    // Name of the scheme
    'table_name' => 'vinyl',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `vinyl`",

    // The scheme
    'scheme' => "CREATE TABLE `vinyl` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `artist` varchar(80) NOT NULL,
        `album` varchar(80) NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'artist' => "Eagels",
            'album'   => "Hotel California",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'artist' => "Simon",
            'album'   => "Logitech",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'artist' => "Samsung",
            'album'   => "Oneil",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'artist' => "Koffie",
            'album'   => "Kop",
            'created'    => date('Y-m-d H:i:s'),
            'created_by' => 1
        ]),
    ],
];