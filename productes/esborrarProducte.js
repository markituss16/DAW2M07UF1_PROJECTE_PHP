function esbProducte() {
	// Variables locals
	var urlCodi = "http://localhost/projecte_php_UF1/productes/esborrarProducte.php?q=";
	var metode = "DELETE";
	// Dades rebudes d'HTML
	var nomUsuari = document.getElementById("codi_prod").value;
	// Enviament dades a PHP
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4) { 
			if ((xhttp.status == 200) || (xhttp.status == 403) || (xhttp.status == 404) || (xhttp.status == 405)){ 
				document.getElementById("resp").innerHTML = xhttp.responseText;
			}
		}
	}
	xhttp.open(metode,urlCodi + nomUsuari,true);
	xhttp.send();				
}