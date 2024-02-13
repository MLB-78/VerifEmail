<?php
// Fonction pour vérifier la sécurité d'une adresse e-mail
function verifierSecuriteEmail($email) {
    $api_key = "3f58cbf5e2a0294fbdbcdf934e59f322c3bd0bb0";
    $url = "https://api.hunter.io/v2/email-verifier?email=" . urlencode($email) . "&api_key=" . $api_key;

    // Initialiser cURL
    $ch = curl_init($url);

    // Configuration des options de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Exécution de la requête
    $response = curl_exec($ch);

    // Gestion des erreurs
    if (curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    }

    // Fermeture de la session cURL
    curl_close($ch);

    // Décodage de la réponse JSON
    $result = json_decode($response, true);

    // Vérifier si la requête a réussi
    if ($result && isset($result['data']['result']) && $result['data']['result'] == 'valid') {
        return true; // L'e-mail est considéré comme sécurisé
    } else {
        return false; // L'e-mail n'est pas considéré comme sécurisé
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur de l'e-mail depuis le formulaire
    $email_a_verifier = isset($_POST["email"]) ? $_POST["email"] : '';

    // Vérifier si l'e-mail est présent avant d'appeler la fonction
    if (!empty($email_a_verifier)) {
        // Vérifier la sécurité de l'e-mail
        if (verifierSecuriteEmail($email_a_verifier)) {
            echo "L'e-mail est sécurisé.";
        } else {
            echo "L'e-mail n'est pas sécurisé.";
        }
    } else {
        echo "Veuillez entrer une adresse e-mail.";
    }
}

?>
