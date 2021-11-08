<?php 
    session_start();
    $_SESSION = array();

    //Utilisation d'une fonction pour filtrer les entrées de l'utilisateur...
    function tri($donnees){
        $donnees = htmlspecialchars($donnees);
        $donnees = stripslashes($donnees);
        $donnees = trim($donnees);
        return $donnees;
    }

    $recherche = tri($_POST['recherche']);

    if(strlen($recherche == 0)){
        header('Location: /TatyWeb0/Pages/Index.php');
    }

    include('C:\wamp\www\TatyWeb0\MainCodes\ConnexionBDD.php');

    //On sélectionne dans la table titlyrics de notre bdd la ligne où la valeur de la recherche est enrégistrée... 
    $req = $bdd->prepare('SELECT * FROM titlyrics WHERE titlemin=?');
    $req->execute(array($recherche));
    //On compte le nombre de résultats trouvé...
    $count = $req->rowCount();

    //Si le nombre est égal à 1...
    if($count == 1){
        //On met les valeurs des champs de la ligne dans un tableau...
        $donnees = $req->fetch();
        //On enrégistre les données des tableaux qui porte l'index du numéro de la variable j dans les $_SESSION...
        $_SESSION['titlemin'] = $donnees['titlemin'];
        $_SESSION['titlemaj'] = $donnees['titlemaj'];
        $_SESSION['titlaslink'] = $donnees['titlaslink'];
        $_SESSION['extractitle'] = $donnees['extractitle'];
        $_SESSION['lyrics'] = $donnees['lyrics'];
        $_SESSION['image'] = $donnees['image'];
        //Puis on redirige l'utilisateur sur la page ResultFound.php 
        header('Location: /TatyWeb0/Pages/ResultFound.php');
    //Sinon...   
    }else{
        
        //On sélectionne dans la table titlyrics de notre bdd les différentes valeurs de titlemin... 
        $req = $bdd->prepare('SELECT titlemin FROM titlyrics');
        $req->execute();
        //On met les valeurs dans un tableau...
        $donnees = $req->fetchall();    //Le tableau est multidimensionnel (puisqu'il contient les différentes valeurs d'un champs et qu'on a utilisé la fonction fetchall()... 
        //On met les valeurs dans un tableau simple...
        for($i = 0; $i < count($donnees); $i++){
            $titles[$i] = $donnees[$i][0];
        }
        //On parcours le tableau $titles...
        for($i = 0; $i < count($titles); $i++){ 
            //Si l'entrée y trouve, on met la valeur de l'index dans la variable $j...
            if(preg_match("/$recherche/i", $titles[$i])){
                    $j = 0;
                    $j = $i;
            }
            //On enrégistre les données utiles dans la variable globale $_SESSION...
            $_SESSION['recherche'] = $recherche;
            $_SESSION['suggestion'] = $titles[$j];
            //On sélectionne dans la table titlyrics de notre bdd la ligne où $_SESSION['suggestion'] est enrégistrée... 
            $req = $bdd->prepare('SELECT * FROM titlyrics WHERE titlemin=?');
            $req->execute(array($_SESSION['suggestion']));
            //On met les valeurs des champs de la ligne dans un tableau...
            $donnees = $req->fetch();
            //On enrégistre la valeur 'titlaslink' dans la variable globale $_SESSION...
            $_SESSION['titlemaj'] = $donnees['titlemaj'];
            $_SESSION['lyrics'] = $donnees['lyrics'];
            //Puis on redirige l'utilisateur sur la page ResultNotFound.php
            header('Location: /TatyWeb0/Pages/ResultNotFound.php');
        }
    }
    
?>