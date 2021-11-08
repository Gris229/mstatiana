<?php
   include('C:\wamp\www\TatyWeb0\MainCodes\ConnexionBDD.php');


    $nbr = file_get_contents('C:\wamp\www\TatyWeb0\Stats/Visiteurs');
    
    $nbr++;
    file_put_contents('C:\wamp\www\TatyWeb0\Stats/Visiteurs', $nbr);
    
    //echo($nbr); 
    //------------------------------------------------------------
    



?>