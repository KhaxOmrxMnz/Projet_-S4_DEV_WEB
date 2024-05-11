<?php
    if(isset($_POST['ok'])){
       
        var_dump($_POST);
     
        $nom = $_POST['nom'];
        $prénom = $_POST['prénom'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $pass = $_POST['pass'];
       
       
        $filename = 'utilisateurs.txt';

// Création d'une chaîne de données à enregistrer dans le fichier
$data = $nom . ',' . $prénom . ',' . $email . ',' . $pseudo . ',' . $pass . ',' . PHP_EOL;

// Ajout des données au fichier
file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

echo "Inscription réussie. Redirection vers la page de connexion...";
// Redirection vers la page de connexion
header("Location: connexion.html");
       
    }
?>
