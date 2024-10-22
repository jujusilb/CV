<?php
function debug($array, $titre="demandé"){ ?>
<details>
    <summary>
        contenu du tableau <?=$titre?>
    </summary>
    <pre>
        <?php print_r($array); ?>
    </pre>
</details>
<?php } 

debug($_POST, "post");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$nom=$_POST["nom"];
$telephone=$_POST["telephone"];
$courriel=$_POST["mail"];
$message=$_POST["message"];
$entreprise=$_POST["entreprise"];
try {
$mail->isSMTP(); //Specifier que PHPMailer utilise le protocole SMTP.
$mail->Host = 'smtp.gmail.com'; //Specifier le serveur gmail.
$mail->SMTPAuth = true; //Pour activer l'authentification. 
$mail->Username = 'jujusilb@gmail.com';
$mail->Password = 'hxzbgmpadwrjhlnb';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = 'utf-8';
$mail->setFrom('jujusilb@gmail.com', 'jujusilb');

if (isset($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $mail->addAddress($_POST['mail']);
} else {
    throw new Exception("Adresse mail invalide.");
}

$mail->isHTML(true); // Activer l'envoi de mail en HTML

$mail->Subject = "un message depuis le CV";

$email = urlencode($_POST['mail']);
$url = "http://julien-silberstein.fr" . urlencode($token) . "&mail=" . $email;

$mail->Body = '';

$mail->SMTPDebug = 0; // Désactiver le débogage

} catch (Exception $e) {
echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
}

?>
