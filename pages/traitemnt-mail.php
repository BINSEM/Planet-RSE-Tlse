<?php 
if (isset($_POST['mail']))
	{
		$mail = htmlspecialchars($_POST['mail']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
	}
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
	{
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'FROM:' . $mail;
		$to = 'planet-res@mail.com';
		$subject = 'Nouvelle inscription sur le site Planet-RSE';
		$message_content = '
		<table>
		<tr>
		<td><b>Nom et prénom :</b></td>
		</tr>
		<tr>
		<td>'. $nom . $prenom .'</td>
		</tr>
		<tr>
		<td><b>Adresse email :</b></td>
		</tr>
		<tr>
		<td>'. $email .'</td>
		</tr>
		</table>
		';
	  
		mail($to, $subject, $message_content, $headers);
	}
	header('Location: contact.php?envoi=true');
?> 