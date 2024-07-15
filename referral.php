<?php

$url = $_GET['url'] ? $_GET['url'] : null;

if($url){
  header('Location: ' . $url);
}

  echo 'Access Denied!';

?>
