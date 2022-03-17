<?php

    function route_params() {
        return $_GET['params'];
    }

    function strHas($str, $like) {
        if (is_array($str)) {
            if (function_exists('str_contains')) {
                return str_contains(implode($str), $like) !== false;
            } else {
                return strpos(implode($str), $like) !== false;
            }
        } else {
            if (function_exists('str_contains')) {
                return str_contains($str, $like) !== false;
            } else {
                return strpos($str, $like) !== false;
            }
        }
    }

    function url($target) {
        global $base_url;
        return $base_url.
        "$target";
    }

    function redirect($url = null) {
        $url = ltrim($url, "/");
        $url = $url;

        global $base_url; 
        ?>
            <script>window.location.replace("<?= $base_url . $url ?>") </script> 
        <?php
    }

    function back() {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    function asset($target) {
        global $base_url;
        return $base_url.
        "resources/assets/$target";
    }

    function dir_asset($target) {
        return $_SERVER['DOCUMENT_ROOT'].str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).
        "resources/assets/$target";
    }

    function auth() {
        return new Auth;
    }

    class Auth {

        public $username;
        public $email;
        public $check;

        public
        function __construct() {
            global $auth;
            $this->username = $auth->getUsername();
            $this->email    = $auth->getEmail();
            $this->check    = $auth->check();
        }
    }

    function errorView($msg) {
        include 'app/Resources/Views/Error/ErrorRoute.php';
    }