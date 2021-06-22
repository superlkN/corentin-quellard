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
        
    if(mail($destinataire, $objet, $message, $headers))
    {
        echo '<script>alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script>alert("Votre message n\'a pas pu être envoyé");</script>';
        exit;
    }
}

if ($_GET['action'] == 'mail')
{
    sendMail();
}
    
?>