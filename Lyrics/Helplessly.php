<?php
    session_start();
    include('C:\wamp\www\TatyWeb0\MainCodes\ConnexionBDD.php');
    $req = $bdd->prepare('SELECT * FROM titlyrics WHERE titlemin=?');
    $req->execute(array('Helplessly'));
    include('C:\wamp\www\TatyWeb0\MainCodes\RequetePreparee.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Lyrics.css"/>
    </head>
    <body>
        <header>
            <a href="/TatyWeb0/Pages/Index.php"><h1>TATIANA MANAOIS</h1></a>
            <h2><?php echo $_SESSION['titlemaj']; ?></h2>
        </header>
        <section>
           <?php echo $_SESSION['lyrics']; ?>

        </section>
    </body>
</html>