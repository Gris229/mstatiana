<!DOCTYPE html>
    <html>   
        <head>
            <link rel="stylesheet" href="Entete.css"/>
            <link rel="stylesheet" type="text/css" href="/TatyWeb0/bootstrap/css/bootstrap.css">
        </head>
        <body>
            <header><a href="Index.php"><h1>TATIANA MANAOIS</h1></a></header><br><br><br><br>
           
               
            <section class="sec">            
                <form method="POST" action="/TatyWeb0/MainCodes/TraitementRecherche.php ">
                    <input type="text" name="recherche" placeholder="         E N T E R   T H E   T I T L E " class="input">
                    <input class="submit" type="submit" name="submit" value="SEARCH"><br> 
                    <p class="erreur">FIELD EMPTY PLEASE ENTER SOMETHING🙄</p>                    
                </form>
            </section>
                
           <script src="/TatyWeb0/bootstrap/jquery.js"></script>
            <script>
                //On cache l'élément qui a la class erreur
                $('.erreur').hide(); 
                //Dès qu'on envoie le formulaire...
                $('form').on('submit', function(e){
                    //Si le nombre de la valeur est inférieur à 0
                    if($('input').val().length < 0 || $('input').val().length == ""){
                        //On arrête l'envoi du formuaire
                        e.preventDefault();
                        //On affiche et cache successivement l'élément qui a la class erreur dans l'intervalle de 3s(3000ms)
                        $('.erreur').show("slow").delay(1500).hide("slow");
                    }
                });
            </script>
        </body>
    </html>
   