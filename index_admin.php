<?php
session_name("admin");
session_start();

if (isset($_SESSION["comandes"])){
    $comandes = $_SESSION["comandes"];
}else{
    $comandes = array();
}
?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Pàgina de l'administrador</title>
	</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Comandes</a></li>
                <ul>
                    <li><a href="#">Visualitzar una comanda</a></li>
                    <li><a href="#">Modificar una comanda</a></li>
                    <li><a href="#">Eliminar una comanda</a></li>
                </ul>           
            <li><a class="active" href="admin.php">Catàleg editable</a></li>
                <ul>
                    <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="modificarProducte.html">Modificar productes</a></li>
                    <li><a href="#">Eliminar productes</a></li>
                </ul>
            <li><a href="gestionarUsuaris.php">Gestionar usuaris</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
        </ul>
    </nav>
    <br><h3>Index del client: Selecciona alguna de les opcions del menú</h3> 
</body>
</html>