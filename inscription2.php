<!DOCTYPE html>
<html lang="fr">

<head>
<title>
 inscription
</title>
 <style>
 body {
      background-image: url('love.jpg'); /* Spécifie l'image de fond */
      background-size: cover; /* Redimensionne l'image pour couvrir toute la zone */
      background-repeat: no-repeat; /* Empêche la répétition de l'image */
      /* Vous pouvez également ajouter d'autres styles pour le corps de la page ici */
    }

 input {
 margin-bottom : 20px;
 }
 </style>
<body>

<form method="POST" action="VerifInscrip.php">

<label for="nom">Votre Nom </label>
<input type="text" id="nom" name="nom" placeholder="Entrer votre nom..." required>

<br />

<label for="prénom">Votre Prénom </label>
<input type="text" id="prénom" name="prénom" placeholder="Entrer votre prénom..." required>

<br />

<label for="email">Votre E-mail </label>
<input type="text" id="email" name="email" placeholder="Entrer votre E-mail..."required>

<br />

<label for="pseudo">Votre Pseudo</label>
<input type="text" id="pseudo" name="pseudo" placeholder="Entrer votre pseudo..." required>

<br />


<label for="pass">Votre Mot de passe </label>
<input type="text" id="pass" name="pass" placeholder="Entrer votre Mot de passe..."required>

<br />
<input type="submit" value="s'inscrire !!" name="ok">


</form>




</body>
</html>
