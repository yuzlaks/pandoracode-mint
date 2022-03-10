<?php

function route_params()
{
  return $_GET['params'];
}

function strHas($str, $like)
{
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

function url($target)
{
  $protocole = $_SERVER['REQUEST_SCHEME'] . '://';
  $host = $_SERVER['HTTP_HOST'] . '/';
  $project = explode('/', $_SERVER['REQUEST_URI'])[1];
  return $protocole . $host . $project . "/$target";
}

function redirect($url = null)
{
  $protocole = $_SERVER['REQUEST_SCHEME'] . '://';
  $host = $_SERVER['HTTP_HOST'] . '/';
  $project = explode('/', $_SERVER['REQUEST_URI'])[1];

  $url = ltrim($url,"/");
  $url = $url;

  ?>
    <script>window.location.replace("<?= $protocole . $host . $project . "/".$url ?>")</script>
  <?php
}

function back()
{
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function asset($target)
{
  $protocole = $_SERVER['REQUEST_SCHEME'] . '://';
  $host = $_SERVER['HTTP_HOST'] . '/';
  $project = explode('/', $_SERVER['REQUEST_URI'])[1];
  return $protocole . $host . $project . "/resources/assets/$target";
}

function auth()
{
  return new Auth;
}

class Auth{

  public $username;
  public $email;
  public $check;

  public function __construct()
  {
    global $auth;
    $this->username = $auth->getUsername();
    $this->email    = $auth->getEmail();
    $this->check    = $auth->check();
  }
}

function errorView($msg)
{
  include 'app/Resources/Views/Error/ErrorRoute.php';
}