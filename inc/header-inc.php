<?php require_once '/Applications/MAMP/htdocs/EvalPHP/set/log.php'?>

<header>
    <div class="head">
        <h3>Bibliothèque Vaugirard</h3>
        <?php if(isset($_SESSION['USER']))
        {?>
            <nav>
                <ul>
                    <li><a class="nav" href="/EvalPHP/logout.php">Logout</a></li>
                </ul>
            </nav>
            <?php } else{?>
            <nav>
                <ul>
                    <li><a class="nav" href="/EvalPHP/login.php">Login</a></li>
                </ul>
            </nav>
            <?php }?>
    </div>
</header>