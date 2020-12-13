<!-- CONTACT.HTML -->
<form method='post' action='forms/contact.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
</form>

<!-- MAILFORM.PHP PD -->
<?php
$to="aym.otha@gmail.com";
$subject="$_REQUEST['subject'] ";
$txt="$_REQUEST['message'] ";
$headers="$_REQUEST['email'] "."\r\n". "CC:aym.otha@gmail.com";
mail($to,$subject,$txt,$headers);



  echo "Merci! Votre requête a été soumise à notre webmestre.";

} else {

  echo "Erreur: Prière de remplir le formulaire.";

}
?>
