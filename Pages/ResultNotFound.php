<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TATIANA MANAOIS</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/TatyWeb0/Pages/Index.css"/>
        <link rel="stylesheet" type="text/css" href="/TatyWeb0/bootstrap/css/bootstrap.css">
    </head>
    <body>

        <?php include('C:\wamp\www\TatyWeb0\Pages\Entete.php');?>

        <section style="color: white; font-size: 30px; text-align: center; width: 100%; height: 200px; margin-top: 90px; background-color: rgba(255, 000, 000, 0.25);">
           <span style="position: relative; top: 55px; background-color: rgba(255, 000, 000, 0);">RESULT NOT FOUND FOR 
           <?php echo $_SESSION['recherche'];?>
           !😫<br><br><h5 style="color: black; text-decoration: underline;">Do you mean: 
           <a href="/TatyWeb0/Lyrics/LyricStandard.php"><?php echo $_SESSION['suggestion'];?></a> ?<h5></span>

           
        </section>
        
        <section>
                    
            <?php include('C:\wamp\www\TatyWeb0\Pages\PiedDePage.php'); ?>
                          
        </section>

    </body>
</html>
<!--?php echo $_SESSION['titlaslink'];?>