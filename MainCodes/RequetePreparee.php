<?php
       
        //On met les valeurs de la colonne dans un tableau...
        $donnees = $req->fetch();
        //On enrégistre les données des tableaux qui porte l'index du numéro de la variable j dans les $_SESSION...
        $_SESSION['titlemin'] = $donnees['titlemin'];
        $_SESSION['titlemaj'] = $donnees['titlemaj'];
        $_SESSION['titlaslink'] = $donnees['titlaslink'];
        $_SESSION['extractitle'] = $donnees['extractitle'];
        $_SESSION['lyrics'] = $donnees['lyrics'];
        $_SESSION['image'] = $donnees['image'];

?>