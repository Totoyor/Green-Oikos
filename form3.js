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

document.getElementById('formulaire3').onsubmit = function () {
	//console.log('Submit !');


	document.getElementById('nom2').style.backgroundColor = "white";
	document.getElementById('prenom2').style.backgroundColor = "white";
	document.getElementById('mail2').style.backgroundColor = "white";
	document.getElementById('tel').style.backgroundColor = "white";
	
	erreur = 0;

	if (document.getElementById('nom2').value == "") {
		document.getElementById('nom2').style.backgroundColor = "red";
		erreur++;
	}
	if (document.getElementById('prenom2').value == "") {
		document.getElementById('prenom2').style.backgroundColor = "red";
		erreur++;
	}
	if (!isEmail(document.getElementById('mail2').value)) {
		document.getElementById('mail2').style.backgroundColor = "yellow";
		erreur++;
	}
	if (document.getElementById('mail2').value == "") {
		document.getElementById('mail2').style.backgroundColor = "red";
		erreur++;
	}
	if (document.getElementById('tel').value == "") {
		document.getElementById('tel').style.backgroundColor = "red";
		erreur++;
	}

	if (!erreur) 
		return true;
	else
		return false;
}