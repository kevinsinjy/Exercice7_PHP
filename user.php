<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user page</title>
</head>
	<body>
  <?php
//exo1
		if(isset($_GET['nom']) && $_GET['prenom']){
    //Exo 3
   		 	echo "Bienvenu sur votre page personnelle ".$_GET['nom']." ".$_GET['prenom'];
}
//exo2
		if(isset($_POST['nom']) && $_POST['prenom']){
    //Exo 4
    		echo "Bienvenu sur votre page personnelle ".$_POST['nom']." ".$_POST['prenom'];
}

?>

		<p>Vous êtes sur une page réservée</p>
	</body>
</html>
