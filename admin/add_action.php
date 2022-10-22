<?php
require_once '/Applications/MAMP/htdocs/EvalPHP/set/config.php';

if (!empty($_POST['auteur'])) {
    $dataAut = $db->prepare('SELECT * FROM Auteur WHERE auteur = ? ');
    $dataAut->execute(array($_POST['auteur']));
    $aut = $dataAut->fetchAll();

    if(isset($aut[0]['Auteur'])){
        $id_aut = $aut[0]['id_auteur'];
    }
    else{
        $newaut = $db->prepare('INSERT INTO Auteur(auteur) VALUES (?)');
        $newaut->execute(array($_POST['auteur']));

        $id_aut = $db->lastInsertId();
    }
}

if (!empty($_POST['catégorie'])) {
    $dataCat = $db->prepare('SELECT * FROM Catégorie WHERE libellé = ? ');
    $dataCat->execute(array($_POST['catégorie']));
    $cat = $dataCat->fetchAll();
    
    if(isset($cat[0]['libellé'])){
        $id_cat = $cat[0]['id_catégorie'];
    } 
    else{
        $newcat = $db->prepare('INSERT INTO Catégorie(libellé) VALUES (?)');
        $newcat->execute(array($_POST['catégorie']));

        $id_cat = $db->lastInsertId();
        }
}
if (!empty($_POST['titre']) && !empty($_POST['synopsys']) && !empty($_POST['auteur']) && !empty($_POST['catégorie']) ) {

    $livr = $db->prepare('INSERT INTO Livre(titre, synopsys, id_auteur, id_catégorie) VALUES(?,?,?,?)');
    $livr->execute([$_POST['titre'], $_POST['synopsys'], $id_aut, $id_cat]);

    header('Location: ./add.php');
}
else {
    header('Location: ./add.php?error=1');
}
?>
