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
        
        <section style="color: white; font-size: 30px; text-align: center; width: 100%; height: 80px; margin-top: 90px; background-color: rgba(000, 000, 000, 0.1);">
           <span style="position: relative; top: 30px; background-color: rgba(000, 000, 000, 0.1);">RESULT FOUND !😎</span>
        </section>
        <section style="height: 250px;">
            <ul>
                <li>
                    <a href="/TatyWeb0/Lyrics/LyricStandard.php">
                        <div class="<?php echo $_SESSION['image'];?>">
                            <span>
                              <hr><br>
                              <?php echo $_SESSION['extractitle'];?><br><i><?php echo $_SESSION['titlemin'];?></i><br>
                              <p class="titre">Click to get the lyrics</p>
                            </span>
                        </div>
                    </a>
                </li>   
            </ul>
        </section>
        
        <section>
                    
            <?php include('C:\wamp\www\TatyWeb0\Pages\PiedDePage.php'); ?>
                    
        </section>
    </body>
</html>