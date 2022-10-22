<!DOCTYPE html>
<html lang="fr">
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/head-inc.php'; ?>
<body>
<?php include '/Applications/MAMP/htdocs/EvalPHP/inc/header-inc.php'; ?>

<form action="./set/log.php" method="post">
    <p>Identifiant: <input type="text" name="identifiant" /></p>
    <p>Mot de passe: <input type="password" name="password" /></p>
    <input type="hidden" name="type" value="login" />
    <p><input type="submit" value="OK"></p>
    <?php if(isset($_GET['error'])) echo "Pseudo ou MDP incorrect ou inexistant"; ?>
</form>

<div id = "retour">
    <a href="index.php">Retour</a>
</div>

</body>
</html>
