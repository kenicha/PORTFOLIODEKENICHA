<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    
    // Vous pouvez ensuite stocker, envoyer par e-mail ou traiter ces données comme vous le souhaitez.
    
    // Exemple de stockage dans un fichier texte :
    $contenu = "Nom: $nom\nE-mail: $email\nSujet: $sujet\nMessage:\n$message\n";
    file_put_contents("contacts.txt", $contenu, FILE_APPEND);
    
    // Redirection vers une page de confirmation ou de remerciement :
    header("Location: confirmation.html");
    exit();
}
?>
