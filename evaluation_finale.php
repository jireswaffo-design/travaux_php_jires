<?php

$annuaire = ["Maxime", "Sophie", "Jires"];

$motdepassAdmin= "Tyrolium";
$ageMinimum= 18;

function afficherBadge($nom, $statut){
   echo "Badge généré : <b>" . $nom . "</b> (statut : " . $statut . ")<br>";
}

if(isset($_POST['prenom'])){

    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $statut = $_POST['statut'];
    $code = $_POST['code'];



  if ($age >= $ageMinimum && $code == $motdepassAdmin){
    $annuaire[] = $prenom;
    echo "bienvenue" . $prenom . "à été ajouté" . "<br>";
    }elseif ($age < $ageMinimum || $statut == "Stagiaire"){
    echo "Erreur : Accès non autorisé pour ce profil  <br>";
    }else{
    echo "Erreur : mot de passe administrateur incorrect <br>";
 }

}





?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page Simple</title>
</head>
<body>

<form action="evaluation_finale.php" method="POST">
    <input type="text" name="prenom" placeholder =" Votre prenom">
    <input type="text" name="age" placeholder =" Votre age">
    <input type="text" name="code" placeholder =" Votre code">
    <select name="Statut"> 
        <option value="Stagière">Développeur</option>
            <option value="Employé">Designer</option>
                
   </select>
   <button type="submit"> Ajouter au répertoire </button>
</form>

   <section>
    <h3>annuaire de l'entreprise</h3>
    <?php
    foreach ($annuaire as $nomEmploye){
           afficherBadge($nomEmploye, "Employé");
    }
    ?>

    <hr> <?php
    for ($i = 0; $i < 3; $i++){
        echo "<p><i>Emplacement bureau vide disponible...</i></p>";
    }
    ?>
    </section>

</body>
</html>