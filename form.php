<?php
    function sendMail() {
        $destinataire = 'corentin.quellard@gmail.com';
        $expediteur = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $objet = $_POST['object'];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
        $message = 	'<div style="width: 100%; text-align: center; font-weight: bold"> 
        Prénom Nom : '.$fname.' '.$lname.'<br>
        E-mail : '. $expediteur.'<br>
        Message :<br>'
        .$_POST['subject'].'</div>';        
        
        if (mail($destinataire, $objet, $message, $headers))
        {
            header('refresh:0.3;url=http://corentin-quellard.com/');
            echo '<script languag="javascript" >alert("Votre message a bien été envoyé, vous allez être redirigez..");</script>';
        } 
        else 
        {
            header('refresh:0.5;url=http://corentin-quellard.com/');
            echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé, vous allez être redirigez..");</script>';
        }
    }

    if ($_GET['action'] == 'mail')
    {
        sendMail();
    }
        
    ?>