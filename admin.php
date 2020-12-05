<?php
session_name('admin');
session_start();
?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <li><a href="admin.php">Catàleg editable</a></li>
                <ul>
                    <li><a href="#">Afegir productes</a></li>
                    <li><a href="#">Modificar productes</a></li>
                    <li><a href="#">Eliminar productes</a></li>
                </ul>
            <li><a href="#">Gestionar usuaris</a></li>
        </ul>
    </nav>

    <div class="taula_productes">
        <img src="#" alt="a">
        <img src="#" alt="a">
        <img src="#" alt="a">
        <img src="#" alt="a">
    </div>
</body>
</html>