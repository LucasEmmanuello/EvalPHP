<?php 
ini_set('display_errors', 1);

if(!isset($_SESSION)){
    session_start();
}

require_once 'db.php';

$config = [
    'key1' => 'value1'
];

?>