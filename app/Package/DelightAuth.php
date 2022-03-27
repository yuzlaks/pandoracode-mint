<?php

// source : https://github.com/delight-im/PHP-Auth
        
if ($_ENV['DB_NAME']) {

    $db = new \PDO("mysql:dbname=$_ENV[DB_NAME];host=$_ENV[DB_HOST];charset=utf8mb4", "$_ENV[DB_USERNAME]", "$_ENV[DB_PASSWORD]");

    $auth = new \Delight\Auth\Auth($db);
    
}
