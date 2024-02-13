<?php
// Fonction pour vérifier la sécurité d'une adresse e-mail avec hunter.io
function verifierSecuriteEmail($email) {
    $api_key = "3f58cbf5e2a0294fbdbcdf934e59f322c3bd0bb0";
    $url = "https://api.hunter.io/v2/email-verifier?email=" . urlencode($email) . "&api_key=" . $api_key;

    // Initialisation
    $ch = curl_init($url);

    // Configuration des options cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Exécution de la req
    $response = curl_exec($ch);

    // return si il y a une erreur
    if (curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    }

    // Fermeture de la session 
    curl_close($ch);

    
    $result = json_decode($response, true);

    // Vérifier si la requête a réussi
    if ($result && isset($result['data']['result']) && $result['data']['result'] == 'valid') {
        return true; 
    } else {
        return false; 
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
