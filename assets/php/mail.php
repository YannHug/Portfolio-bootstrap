<?php
session_start();

// Destinataire
$to = 'contact@yannh.website';

// Sujet
$subject = 'Contact via le portfolio';

// message
$message = "
     <html>
      <head>
       <title>Contact depuis le portfolio</title>
      </head>
      <body>
       <p>Message de {$_POST['nom']} {$_POST['prenom']}</p>
       <p>{$_POST['message']} </p>
";

// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
$headers[] = "From: {$_POST['email']}";


$retour = mail($to, $subject, $message, implode("\r\n", $headers));
if ($retour) {
    $_SESSION['message'] = 'Votre message est envoyé';
    header("Location: ../../index.php");
}
