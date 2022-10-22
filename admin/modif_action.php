<?php
require_once '/Applications/MAMP/htdocs/EvalPHP/set/config.php';
if(isset($_POST['selectit'])){
    $db->exec('UPDATE Livre SET titre = "'.$_POST['changtit'].'" WHERE Livre.titre = "'.$_POST['selectit'].'"');
}
if(isset($_POST['selecsys'])){
    $db->exec('UPDATE Livre SET synopsys = '.$_POST['changsys'].'" WHERE Livre.synopsys = "'.$_POST['selecsys'].'" ');
}
if(isset($_POST['selecaut'])){
    $db->exec('UPDATE Auteur SET auteur = "'.$_POST['changaut'].'" WHERE Auteur.auteur = "'.$_POST['selecaut'].'"');
}
if(isset($_POST['seleccat'])){
    $db->exec('UPDATE Auteur SET libellé = "'.$_POST['changcat'].'" WHERE Catégorie.libellé = "'.$_POST['seleccat'].'"');
}

header('Location: /EvalPHP/index.php');


