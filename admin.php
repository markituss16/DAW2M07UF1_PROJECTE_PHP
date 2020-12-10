<?php
session_name('admin');
session_start();
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
            <li><a href="comandes.php">Comandes</a></li>
                <ul>
                    <li><a href="#">Visualitzar una comanda</a></li>
                    <li><a href="#">Modificar una comanda</a></li>
                    <li><a href="formEsborrarComanda.php">Eliminar una comanda</a></li>
                </ul>           
            <li><a class="active" href="admin.php">Catàleg editable</a></li>
                <ul>
                    <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="formModificarProducte.php">Modificar productes</a></li>
                    <li><a href="#">Eliminar productes</a></li>
                </ul>
            <li><a href="gestionarUsuaris.php">Gestionar usuaris</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
        </ul>
    </nav>

    <div class="taula_productes">
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a">  
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a"> 
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a"> 
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a"> 
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a"> 
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a">
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a"> 
        <img id="img_pc" src="img_productes/macbook.jpg" alt="a">  
    </div>
</body>
</html>