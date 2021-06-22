<?php
function sendMail() {
    $destinataire = 'corentin.quellard@gmail.com';
    $expediteur = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $objet = $_POST['subject'];
        
    $headers  = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
    $headers .= 'To: '.$destinataire."\n";
    $headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n";
        
    $message = 	'<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '. $fname . ' ' . $lname .'!<br>
                '.$_POST['subject'].'</div>';

    mail($destinataire, $objet, $message, $headers);
}

if ($_GET['action'] == 'mail')
{
    sendMail();
    header('Location: http://corentin-quellard.com/');
}
    
?>