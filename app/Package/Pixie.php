<?php

    // source : https://github.com/usmanhalalit/pixie

    // Create a connection, once only.
    $config = array(
        'driver'    => 'mysql', // Db driver
        'host'      => $_ENV['DB_HOST'],
        'database'  => $_ENV['DB_NAME'],
        'username'  => $_ENV['DB_USERNAME'],
        'password'  => $_ENV['DB_PASSWORD'],
        'charset'   => 'utf8', // Optional
        'collation' => 'utf8_unicode_ci', // Optional
        'prefix'    => '', // Table prefix, optional
    );

    new \Pixie\Connection('mysql', $config, 'QB');