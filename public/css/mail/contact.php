<?php 
// Vérifions si les champs ne sont pas vides
if (empty($_POST['name']) || 
	empty($_POST['email']) || 
	empty($_POST['phone']) || 
	empty($_POST['message']) || 
	!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo "Tous les champs doivent être rempli correctement !";
	return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']))
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$developpeur = 'fayem7409@gmail.com'; 
$emailSub = "SiteWeb Contact Form:  $name";
$emailBody = "Vous avez reçu un nouveau message depuis votre site web contact.\n\n"."Voici les details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@gmail.com\n"; 
$headers .= "Reply-To: $developpeur";   
mail($developpeur,$emailSub,$emailBody,$headers);
return true;         
?>


?>