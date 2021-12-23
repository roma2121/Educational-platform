<?php

$task_id = $_POST['watched_id'];
$cookie_name = "watched[$task_id]";

if( isset($_COOKIE['watched']) && array_key_exists($task_id, $_COOKIE['watched']) ){
  setcookie($cookie_name, '', time()-400, '/');
}else{
  setcookie($cookie_name, '1', time()+60*60, '/');
}