<?php
require_once __DIR__ .'/config.php';

if(isset($_POST['type']) && $_POST['type'] =='login'){
    if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $datasql = $db->prepare('SELECT * FROM Login WHERE identifiant = ? AND password = ?');
    $datasql->execute(array($_POST['identifiant'], $_POST['password']));
    $User = $datasql->fetchAll();

        if (count($User) > 0) {
            $_SESSION['USER'] = $User;
            header('Location: ../index.php');
            die();
        }else {
            header('Location: ../login.php?error=1');
        }
    }
}
?>
