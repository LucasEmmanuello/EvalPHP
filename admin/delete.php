<!DOCTYPE html>
<html lang="fr">
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/head-inc.php'; ?>
<body>
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/header-inc.php'; ?>

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
</table>

<form action="/EvalPHP/admin/del.php "method="post">
    <p>Que modifer ?: <input type="text" name="modif" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<div id = "retour">
    <a href="../index.php">Home</a>
</div>

<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/footer-inc.php' ?>
</body>
</html>