<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Back-Office</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./logout.php">Déconnexion</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<title>Back-Office</title>
<meta http-equiv="content-type" 
content="text/html;charset=utf-8" />
<link href="styles/meyer.css" rel="stylesheet" type="text/css" />
<link href="styles/styleGO.css" rel="stylesheet" type="text/css" />
    
    
</head>
<body>

<?php
include("mysql-inc.php");
?>

<div id="head">
    <a href="backoffice.php"><h1 class="titre_bo">Back-Office</h1></a>
</div>


<div id="articles_bo">

<?php
    if (isset($_GET["aut"])) {
        $query = "insert into 1a_posts
                (POS_USER,POS_CAT,POS_TITLE,POS_CONTENT)
                values
                (".$_GET["aut"].",".$_GET["cat"].",'".$_GET["titre"]."','".$_GET["contenu"]."')";
    
//echo $query;
        $q = mysql_query($query); 
        if (!$q) {
            die("Erreur MySQL :".mysql_error());
            }
        else
        {
            echo"<p>Merci pour la saisie</p>";
        }
    }
?>
    
    
    
    <div>Formulaire de création d'un article :</div>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    
    <br/>Auteur :<select name="aut">
        <option value="1">Admin</option>
    </select>
    <br/>Catégorie :<select name="cat">
<?php
    $query = "select * from `1a_categories`";
$q = mysql_query($query);
if ($q)
{
    //echo "<p>requête reçue</p>";
    while ($row = mysql_fetch_row($q)) 
    {
        
        echo "<option value ='".$row[0]."'>".$row[1]."</option>";
        
    }
}
    else 
    {
        die("Problème = ".mysql_error());
    }   
?>
        
    </select>
    <br/>Titre :<input type="text" name="titre"/>
    <br/>Contenu :<textarea type="" name="contenu"></textarea>
    <br/><input type="submit" value="Envoyer"/>
    
    
</form>

<hr/>
    <div>Articles présents sur la base de données :</div>
    
    <?php
    $query = "select * 
    from `1a_posts`
    ORDER BY POS_ID";

$q = mysql_query($query);
if ($q)
{
    //echo "<p>requête reçue</p>";
    while ($row = mysql_fetch_row($q)) 
    {
        echo "<br/><ul>";
        echo "<li>ID : ".$row[0]."</li>";
        echo "<li>Titre : ".$row[1]."</li>";
        echo "<li>Contenu : ".$row[2]."</li>";
        echo "<li>Ecrit par : ".$row[3]."</li>";
        echo "<li>Catégorie : ".$row[4]."</li>";
        echo "</ul><br/>";
    }
}
    else 
    {
        die("Problème = ".mysql_error());
    }   
?>
    
</div>

    
</body>
</html>