<?php

return [
    'database' => [
        'connection'	=> '',
        'name'			=> '',
        'username'		=> '',
        'password'		=> '',
        'options'		=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ],
    ],
    'site' => [
        'name'	=> 'Parser board',
        'path'	=> '/'
    ]
];