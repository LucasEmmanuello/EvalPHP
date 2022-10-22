<html lang="fr">
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/head-inc.php'; ?>
<body>
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/header-inc.php'; ?>

<?php 
//Modifier un titre
if($_POST['modif'] == 'Titre' or $_POST['modif'] == 'titre'){
    $titres = $db->prepare('SELECT titre FROM Livre ');

    $titres -> execute();
    $titres = $titres->fetchAll();

    ?>
    <table>
    <?php
    foreach($titres as $titre) {
        echo '<td>'.$titre['titre'].'</td>';
    }
    ?>
</table> 

<form action="/EvalPHP/admin/del_action.php "method="post">
    <p>Supression: <input type="text" name="delliv" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<?php } //Modifier un synopsys

if($_POST['modif'] == 'Synopsys' or $_POST['modif'] == 'synopsys' ){
    $livres = $db->prepare('SELECT * FROM Livre INNER JOIN Auteur ON Livre.id_auteur = Auteur.id_auteur 
    INNER JOIN Catégorie ON Livre.id_catégorie = Catégorie.id_catégorie');
    
    $livres -> execute();
    $livres = $livres->fetchAll();

    ?>
    <table>
    <?php
    foreach($livres as $livre) {
    echo '<tr><td>'.$livre['titre'].'</td>
        <td>'.$livre['synopsys'].'</td></tr>';
    }
?>
</table> 

<form action="/EvalPHP/admin/del_action.php "method="post">
    <p>Supression par titre: <input type="text" name="delsys" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<?php } //Modifier un Auteur

if($_POST['modif'] == 'Auteur' or $_POST['modif'] == 'auteur' ){
    $auts = $db->prepare('SELECT auteur FROM Auteur ');

    $auts -> execute();
    $auts = $auts->fetchAll();

    ?>
    <table>
    <?php
    foreach($auts as $aut) {
        echo '<td>'.$aut['auteur'].'</td>';
    }
    ?>
</table> 

<form action="/EvalPHP/admin/del_action.php "method="post">
    <p>Supression: <input type="text" name="delaut" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<?php } //Modifier une Catégorie

if($_POST['modif'] == 'Catégorie' or $_POST['modif'] == 'catégorie' ){
    $cats = $db->prepare('SELECT libellé FROM Catégorie ');

    $cats -> execute();
    $cats = $cats->fetchAll();

    ?>
    <table>
    <?php
    foreach($cats as $cat) {
        echo '<td>'.$cat['libellé'].'</td>';
    }
    ?>
</table> 

<form action="/EvalPHP/admin/del_action.php "method="post">
    <p>Suppression: <input type="text" name="delcat" /></p>
    <p><input type="submit" value="OK"></p>
</form>
<?php } ?>

<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/footer-inc.php';?>
</body>
</html>