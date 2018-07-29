<!DOCTYPE html>
    <html lang="fr">
        <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Partie 7</title>
        </head>

        <body>
            <p>Renseigner info</p>
            <!--Exo 1-->
                <form action="user.php" method="get">
                    <p>Votre nom : <input type="text" name="nom" /></p>
                    <p>Votre prénom : <input type="text" name="prenom" /></p>
                    <p><input type="submit" value="OK"></p>
                </form>
                
            <!--Exo 2-->
                <form action="user.php" method="post">
                    <p>Votre nom : <input type="text" name="nom" /></p>
                    <p>Votre prénom : <input type="text" name="prenom" /></p>
                    <p><input type="submit" value="OK"></p>
                </form>
                
            <!--Exo 5 --> 
                <form method="post">
                    <select name="civilite">
                    <option>Mr.
                    <option>Mme
                    </select>
                    <p>Votre nom : <input type = "text" name="nom"/></p>
                    <p>Votre prénom : <input type="text" name="prenom" /></p>
                    <p><input type="submit" value="OK"></p> 
                </form>  
        <!--Exo 6-->
        <?php


            $ext = pathinfo("fichier", PATHINFO_EXTENSION);

            if(isset($_POST["civilite"]) AND $_POST["nom"] AND $_POST["prenom"] AND $_POST["fichier"] AND $ext = "pdf"){
                echo "Hello ".$_POST["civilite"]." ".$_POST["nom"]." ".$_POST["prenom"].".<br>Vous venez d'ajouter le fichier :<br>".$_POST["fichier"];
            }
            else {
                echo "<form method='post'>
                <select name='civilite'>
                <option>Mr.
                <option>Mme
                </select>
                <p>Votre nom : <input type = 'text' name='nom'/></p>
                <p>Votre prénom : <input type='text' name='prenom' /></p>
                <!--Exo 7--> <p><input type='file' name='fichier'/> </p> <!--Exo 7--> 
                <p><input type='submit' value='OK'></p> 
            </form>";
            }
            
            if(isset($_POST["fichier"]) AND $ext != "pdf") {
                echo "Format de fichier incorrect : vous devez utiliser un format pdf";
                }
                ?>
        </body>
    </html>
