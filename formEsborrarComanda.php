<?php session_start(); ?>
<html>
	<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
		<script language="javascript" src="esborrarComanda.js"></script>
        <title>Esborrar comanda</title>
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
                <li><a href="admin.php">Catàleg editable</a></li>
                    <ul>
                        <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                        <li><a href="formModificarProducte.php">Modificar productes</a></li>
                        <li><a href="#">Eliminar productes</a></li>
                    </ul>
                <li><a href="gestionarUsuaris.php">Gestionar usuaris</a></li>
                <li><a href="logout.php">Tancar sessió</a></li>
            </ul>
        </nav>

		<fieldset>
			<legend>
				<h1>Petició d'anul·lació de comanda</h1>
			</legend>		
			<form id="frmEsbCom">
				<table>
					<tr>
						<td>Identificador de comanda:</td>
						<td><input type="text" name="nomCom" id="nomCom" size="20"></td>
					</tr>
				</table>
				<input type="button" name="bEsbCom" id="bEsbCom" value="Esborra Comanda" onclick="esbComanda();">
				<input type="button" name="bNet" id="bNet" value="Neteja formulari" onclick="netForm();">
			</form>
		</fieldset>
		<fieldset>
			<legend>
				<h1>Resposta a la petició</h1>
			</legend>
			<p id="resp"></p>
		</fieldset>			
	</body>
</html>