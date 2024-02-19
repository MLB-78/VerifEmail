<?php
@session_start(); // Appel à session_start()

function testerForceMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) <= 10) {
        return "Le mot de passe doit avoir plus de 10 caractères.";
    }

    // Vérifier s'il y a des lettres
    if (!preg_match("/[a-zA-Z]/", $motDePasse)) {
        return "Le mot de passe doit contenir au moins une lettre.";
    }

    // Vérifier s'il y a des chiffres
    if (!preg_match("/[0-9]/", $motDePasse)) {
        return "Le mot de passe doit contenir au moins un chiffre.";
    }

    // Vérifier si le mot de passe est dans une liste de mots de passe connus (exemple avec un fichier texte)
    $knownPasswords = file("known_passwords.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($motDePasse, $knownPasswords)) {
        return "Le mot de passe est trop courant et ne peut pas être utilisé.";
    }

    // À compléter : Vérifier si le mot de passe est dans une base de données darknet (exemple avec une API à déterminer)

    // À compléter : Vérifier si le mot de passe est dans la base de données Have I Been Pwned (exemple avec un fichier texte)

    // Si toutes les vérifications passent, le mot de passe est considéré comme fort
    return "Le mot de passe est fort.";
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du mot de passe depuis le formulaire
    $motDePasse_a_verifier = isset($_POST["password"]) ? $_POST["password"] : '';

    // Tester la force du mot de passe
    $resultatTestMotDePasse = testerForceMotDePasse($motDePasse_a_verifier);

    // Stocker le résultat du test en session
    $_SESSION['resultatTestMotDePasse'] = $resultatTestMotDePasse;

    // Redirection vers le formulaire pour afficher le résultat du test
    header("Location: formulaire.php");
    exit();
}

// Afficher le résultat du test stocké en session s'il existe
if (isset($_SESSION['resultatTestMotDePasse'])) {
    echo $_SESSION['resultatTestMotDePasse'];
    unset($_SESSION['resultatTestMotDePasse']); // Effacer le message après l'avoir affiché
}
?>
