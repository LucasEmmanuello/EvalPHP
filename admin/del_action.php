<?php
require_once '/Applications/MAMP/htdocs/EvalPHP/set/config.php';
if(isset($_POST['delliv'])){
    $db->exec('DELETE FROM Livre WHERE Livre.titre = "'.$_POST['delliv'].'"');
}
if(isset($_POST['delsys'])){
    $db->exec('DELETE FROM Livre WHERE Livre.synopsys = "'.$_POST['delsys'].'"');
}
if(isset($_POST['delaut'])){
    $db->exec('DELETE FROM Auteur WHERE Auteur.auteur = "'.$_POST['delaut'].'"');
}
if(isset($_POST['delcat'])){
    $db->exec('DELETE FROM Catégorie WHERE Catégorie.libellé = "'.$_POST['delcat'].'"');
}

header('Location: /EvalPHP/index.php');