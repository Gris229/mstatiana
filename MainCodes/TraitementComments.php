<?php

    include('ConnexionBDD.php');

    //Utilisation d'une fonction pour filtrer les entrées de l'utilisateur!
    function tri($donnees){
        $donnees = htmlspecialchars($donnees);
        $donnees = stripslashes($donnees);
        $donnees = trim($donnees);
        return $donnees;
    }

    $pseudo = tri($_POST['pseudo']);
    $msg = tri($_POST['msg']);
    $mail = $_POST['mail'];

    if (isset($pseudo)){
        if(preg_match('#^[a-z][a-z0-9éèêç]{2,}@[a-z]{3,}\.[a-z]{2,}$#', $_POST['mail'])){
            if(isset($msg)){

                $req = $bdd->prepare("INSERT INTO comments(pseudo, email, msg, datecomment) VALUES (?, ?, ?, CURDATE())");
				$req->execute(array(
					$pseudo,
					$mail,
                    $msg));

                    header('Location: /TatyWeb0/Pages/CommentsSent.php');
                    
            }else{
                echo "You must fill message field";
            }
        }else{
            echo "You must enter a email format";
        }
    }else{
        echo "You must fill pseudo field";
    }

 ?>