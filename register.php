<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Registre d'usuari</title>
</head>
<body>
<?php
    require_once("usuaris.php");

    $fitxer_usuaris="usuaris.txt";
    $usuari = $_POST["nom_usuari"];
    $ctsnya = $_POST["ctsnya"];

    $usuari_nou = new Usuari($usuari,$ctsnya);
    $usuari_nou -> afegirUsuari();
    echo "S'ha afegit l'usuari ".$_POST["nom_usuari"]." a la llista d'usuaris de la web.<br>";
    echo "Per a iniciar sessió, ves a <a href=login.html class='btn btn-dark m1-2'>Fes click</a>";
?>
</body>
</html>