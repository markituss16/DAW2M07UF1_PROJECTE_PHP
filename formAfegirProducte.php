<?php session_start(); ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Afegir producte</title>
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
                        <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                        <li><a href="#">Modificar productes</a></li>
                        <li><a href="#">Eliminar productes</a></li>
                    </ul>
                <li><a href="gestionarUsuaris.php">Gestionar usuaris</a></li>
                <li><a href="logout.php">Tancar sessió</a></li>
            </ul>
        </nav>
        <div>
            <h1>AFEGIR PRODUCTE</h1>
            <form action="afegirProducte.php" method="POST">
                <label>Secció:</label>
                <input id="seccio" name="seccio" type="text"><br>
                <label>Nom:</label>
                <input id="nom" name="nom" type="text"><br>
                <label>Codi:</label>
                <input id="codi" name="codi" type="text"><br>
                <label>Preu:</label>
                <input id="preu" name="preu" type="text"><br>
                <label>Imatge</label>
                <input id="imatge" name="imatge" type="text"><br>
                <input type="submit" value="Afegir"><br>
            </form>
        </div>
    </body>
</html>