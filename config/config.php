<?php 
// Minsagens de erro
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

// Slim config
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
// database
$config['db']['host']   = 'localhost';
$config['db']['user']   = 'root';
$config['db']['pass']   = 'root';
$config['db']['dbname'] = 'name_db';

 ?>