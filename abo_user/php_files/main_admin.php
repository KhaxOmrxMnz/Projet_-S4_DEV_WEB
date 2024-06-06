<?php
session_start();
if (!isset($_SESSION['pseudo']) || $_SESSION['code'] !== 'administrateur') {
   header("Location: connexion.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Administrateur  </title>
</head>
<body>
    <h1>Bienvenue, Administrateur <?= $_SESSION['pseudo']?></h1>
    <p>Vous avez accès à toutes les fonctionnalités administratives.</p>
    <!-- Ajoutez les fonctionnalités administratives ici -->
</body>
</html>
<?php
session_start();

include('entete/connexion_base_données.php');

$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Utilisateurs</title>
</head>
<body>
    <h1>Gestion des Utilisateurs</h1>
    
        <nav>
        <ul>
            <li><a href="members.php">Gérer les utilisateurs</a></li>
            <li><a href="gerer_abonnements.php">Gérer les profils</a></li>
            <li><a href="gerer_messages.php">Gérer les messages</a></li>
        </ul>
    </nav>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Date de Création</th>
        </tr>
        <?php while ($user = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['pseudo']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td><?php echo $user['date_inscription']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
