<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=bibiothèque', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
