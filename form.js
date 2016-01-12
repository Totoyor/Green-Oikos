function isEmail(email)
{
     if ( ( email.indexOf("@") == -1 ) 
	   || ( email.indexOf("@") == 0 ) 
	   || ( email.indexOf("@") != email.lastIndexOf("@") ) 
	   || ( email.indexOf(".") == email.indexOf("@") - 1 ) 
	   || ( email.indexOf(".") == email.indexOf("@") + 1 ) 
	   || ( email.indexOf("@") == email.length -1 ) 
	   || ( email.indexOf (".") == - 1 ) 
	   || ( email.lastIndexOf (".") == email.length - 1 ) )
         return false;
      else
         return true;
}

document.getElementById('formulaire').onsubmit = function () {
	//console.log('Submit !');

	document.getElementById('nom').style.backgroundColor = "white";
	document.getElementById('prenom').style.backgroundColor = "white";
	document.getElementById('mail').style.backgroundColor = "white";
	document.getElementById('comment').style.backgroundColor = "white";
	
	erreur = 0;

	if (document.getElementById('nom').value == "") {
		document.getElementById('nom').style.backgroundColor = "red";
		erreur++;
	}
	if (document.getElementById('prenom').value == "") {
		document.getElementById('prenom').style.backgroundColor = "red";
		erreur++;
	}
	if (!isEmail(document.getElementById('mail').value)) {
		document.getElementById('mail').style.backgroundColor = "yellow";
		erreur++;
	}
	if (document.getElementById('mail').value == "") {
		document.getElementById('mail').style.backgroundColor = "red";
		erreur++;
	}
	if (document.getElementById('comment').value == "") {
		document.getElementById('comment').style.backgroundColor = "red";
		erreur++;
	}

	if (!erreur) 
		return true;
	else
		return false;
}