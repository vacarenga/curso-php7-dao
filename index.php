<?php 

require_once("config.php");

$root = new Usuario();

$root->loadByid(3);

echo $root;

 ?>