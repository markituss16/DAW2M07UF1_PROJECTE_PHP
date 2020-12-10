<?php
session_name("client");
session_start();

?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Comandes</title>
	</head>
<body>
    <nav>
        <ul>
            <li><a href="comandes.php">Comandes</a></li>         
            <li><a class="active" href="cataleg_usuari.html">Catàleg</a></li>
                <ul>
                    <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="formModificarProducte.php">Modificar productes</a></li>
                    <li><a href="#">Eliminar productes</a></li>
                </ul>
            <li><a href="zona_personal.php">Zona personal</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
            <li>
                <a href="cistella.php">
                <img id="carret" src="img_productes/carret.png" width="50" height="50"/>
                </a>
            </li>
        </ul>
    </nav>

    <br><a href="#">Visualitzar una comanda</a><br>
    <a href="#">Modificar una comanda</a><br>
    <a href="formEsborrarComanda.php">Eliminar una comanda</a>