<?php
/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| File ini digunakkan untuk membuat custom url anda sendiri
| dengan fitur yang fleksibel, yang membebaskan anda untuk berkreasi.
| 
| example : $router->get('url', function(){ ... })
|
|--------------------------------------------------------------------------
| source : https://github.com/miladrahimi/phprouter
|--------------------------------------------------------------------------
|
*/

$router->get('/', function () {
    view('dashboard');
});