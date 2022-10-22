<!DOCTYPE html>
<html lang="fr">
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/head-inc.php'; ?>
<body>
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/header-inc.php'; ?>
<?php

$livres = $db->prepare('SELECT * FROM Livre INNER JOIN Auteur ON Livre.id_auteur = Auteur.id_auteur 
INNER JOIN Catégorie ON Livre.id_catégorie = Catégorie.id_catégorie');

$livres -> execute();
$livres = $livres->fetchAll();

?>
<table>
    <tr>
        <td>
            <p>Titre</p>
        </td>
        <td>
            <p>Synopsys</p>
        </td>
        <td>
            <p>Auteur</p>
        </td>
        <td>
            <p>Catégorie</p>
        </td>
    </tr>
<?php
foreach($livres as $livre) {
    echo '<tr><td>'.$livre['titre'].'</td>
        <td>'.$livre['synopsys'].'</td>
        <td>'.$livre['Auteur'].'</td>
        <td>'.$livre['libellé'].'</td></tr>';
}
?>
</table>

<?php if(isset($_SESSION['USER']))
        { include '/Applications/MAMP/htdocs/EvalPHP/inc/footer-inc.php';}?>
</body>
</html>
