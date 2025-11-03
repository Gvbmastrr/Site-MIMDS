<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "tonemail@example.com"; // remplace par ton email
    $subject = "Nouveau message depuis le site";
    $body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "<p style='text-align:center;color:green;'>Message envoyé avec succès !</p>";
    } else {
        echo "<p style='text-align:center;color:red;'>Erreur lors de l'envoi du message.</p>";
    }
} else {
    echo "<p>Erreur : formulaire non soumis correctement.</p>";
}
?>
