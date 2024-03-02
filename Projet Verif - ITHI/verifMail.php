<?php
session_start(); 

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

    // Gestion des erreurs HTTP
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        $_SESSION['message'] = 'Erreur HTTP : ' . $httpCode;
        return false;
    }

    // Gestion des erreurs cURL
    if (curl_errno($ch)) {
        $_SESSION['message'] = 'Erreur cURL : ' . curl_error($ch);
        return false;
    }

    // Fermeture de la session cURL
    curl_close($ch);

    // Décodage de la réponse JSON
    $result = json_decode($response, true);

    // Vérifier si la requête a réussi
    if ($result && isset($result['data']['status'])) {
        if ($result['data']['status'] == 'valid') {
            $_SESSION['message'] = 'L\'e-mail est sécurisé.';
            return true; // L'e-mail est considéré comme sécurisé
        } else {
            // Vérifier si la clé 'reason' existe dans le tableau
            $reason = isset($result['data']['reason']) ? $result['data']['reason'] : 'Raison inconnue';
            $_SESSION['message'] = 'L\'e-mail n\'est pas sécurisé. Raison : ' . $reason;
            return false; // L'e-mail n'est pas considéré comme sécurisé
        }
    } else {
        $_SESSION['message'] = 'Réponse de l\'API inattendue : ' . print_r($result, true);
        return false;
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur de l'e-mail depuis le formulaire
    $email_a_verifier = isset($_POST["email"]) ? $_POST["email"] : '';

    // Vérifier si l'e-mail est présent avant d'appeler la fonction
    if (!empty($email_a_verifier)) {
        // Vérifier la sécurité de l'e-mail
        verifierSecuriteEmail($email_a_verifier);
            // Redirection vers la même page pour éviter la répétition du formulaire lors de l'actualisation
    header("Location: {$_SERVER['REQUEST_URI']}");
    exit();
    } else {
        $_SESSION['message'] = 'Veuillez entrer une adresse e-mail.';
    }

}

// Afficher le message stocké en session s'il existe
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']); // Effacer le message après l'avoir affiché
}

?>