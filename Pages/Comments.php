<?php
    include('C:\wamp\www\TatyWeb0\Stats\Stats.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Comments.css">
        <title>Comments</title>
    </head>
    <body>
        <header>
            <a href="Index.php"><h1>TATIANA MANAOIS</h1></a>
        </header><br>

        <section>
            <form method="POST" action="/TatyWeb0/MainCodes/TraitementComments.php">
                <label for="pseudo">PSEUDO:</label>
                <input type="text" name="pseudo" id="pseudo" required="required"><br>
                <label for="mail">EMAIL:</label>
                <input type="email" name="mail" id="mail" required="required"><br>
                <label for="msg" class="msg">MESSAGE:</label>
                <textarea name="msg" id="msg" required="required"></textarea><br>
                <input type="submit" value="SEND" class="send"><br>
            </form>
            <div>
            
            </div>
                
            
        </section>    
    </body>
</html>
