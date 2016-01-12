<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Green-Oikos Infrastructures écologiques et autonomes</title>
<meta name="description" content="Premier constructeur de maison autonomes dans le monde, avec Green-Oikos construisez un monde durable" />
<meta name="keywords" content="maison, environnement, écologique, nature, recyclage, matériaux, autonome, durable" />
<link href="styles/meyer.css" rel="stylesheet" type="text/css" />
<link href="styles/styleGO.css" rel="stylesheet" type="text/css" />

</head>
<body>


	<div id="conteneur">

        <?php
include("header.inc.php");
?>
    
    
    	<div id="contact">
            <h2 class="contactez">Contactez-nous :</h2>
            <form id="formulaire" method="get" action="#">
                <label>Nom :</label><br/><input type="text" id="nom" size="30"/><br/><br/>
                <label>Prénom :</label><br/><input type="text" id="prenom" size="30"/><br/><br/>
				<label>Mail : <i>(adresse@exemple.com)</i></label><br/><input type="text" id="mail" size="40"/><br/><br/>
				<label>Message :</label><br/><textarea id="comment" rows="6" cols="40"></textarea><br/><br/>
				<input type="submit" value="Envoyer" class="bouton" />
            <br/>
            <div id="agence">
            <h2 class="agence-adresse">ADRESSE DU SIÈGE GREEN-OIKOS</h2>
                Palais Brongniart<br/>
                28 place de la Bourse<br/>
                75002 - Paris <br/>
                Téléphone : +33 (0)1 53 79 59 59 (serveur vocal)
            </div>  
            </form>
            
            
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.428362415593!2d2.341332000000007!3d48.86910999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c7e25a349%3A0x5012b3632a6880b7!2sPalais+Brongniart!5e0!3m2!1sfr!2sfr!4v1398774893666" width="600" height="450" frameborder="0" style="border:0"></iframe>
            
		</div>


        
<?php
include("footer.inc.php");
?>
        <?php
include("mysql-inc.php");
?>
        
	<!--"conteneur"--></div>
    
<script type="text/javascript" src="form.js"></script>
    
</body>
</html>


