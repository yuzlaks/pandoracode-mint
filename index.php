<?php

/*
|--------------------------------------------------------------------------
| Composer Autoloader
|--------------------------------------------------------------------------
|
| Load semua vendor composer, menggunakan include 'vendor/autoload.php'
| supaya project dapat ter-integrasi dengan vendor.
|
*/

require 'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Library Package 
|--------------------------------------------------------------------------
|
| - Whoops : digunakkan untuk menghandler semua error untuk project anda
|
| - PhpDotenv : digunakkan untuk integrasi file ".env"
|
| - Pixie : digunakkan untuk query builder pada project anda.

| - DelightAuth : digunakkan untuk integrasi auth.
| 
| - MiladRahimiRouter : digunakkan untuk integrasi routes pada project anda.
| 
*/

include 'app/Package/Whoops.php';
include 'app/Package/PhpDotenv.php';
include 'app/Package/Pixie.php';
include 'app/Package/DelightAuth.php';
include 'app/Package/MiladRahimiRouter.php';