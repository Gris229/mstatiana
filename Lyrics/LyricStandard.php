<?php
    include('C:\wamp\www\TatyWeb0\Stats\Stats.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="/TatyWeb0/Lyrics/Lyrics.css"/>
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