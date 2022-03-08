<?php

// source : https://github.com/vlucas/phpdotenv

$project = $_SERVER['DOCUMENT_ROOT']."/";
$project .= explode('/', $_SERVER['REQUEST_URI'])[1];

$dotenv = Dotenv\Dotenv::createImmutable($project);
$dotenv->load();