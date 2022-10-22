<!DOCTYPE html>
<html lang="fr">
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/head-inc.php'; ?>
<body>
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/header-inc.php'; ?>

<form action="/EvalPHP/admin/add_action.php "method="post">
    <p>Titre: <input type="text" name="titre" /></p>
    <p>Synopsys: <textarea rows="10" cols="30" wrap="pysical" name="synopsys"></textarea></p>
    <p>Auteur: <input type="text" name="auteur" /></p>
    <p>Catégorie: <input type="text" name="catégorie" /></p>
    <p><input type="submit" value="OK"></p>
    <p><?php if(isset($_GET['error'])) echo "Veuillez remplir tout les champs"; ?></p>
</form>

<div id = "retour">
    <a href="../index.php">Home</a>
</div>

<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/footer-inc.php'?>
</body>
</html>
