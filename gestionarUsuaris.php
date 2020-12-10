<?php
    $fitxer_usuaris="fitxers/usuaris.txt";
    $fitxer = fopen($fitxer_usuaris,"r") or die ("No es pot llegir la llista d'usuaris");

    $f = file_get_contents($fitxer_usuaris);
?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Gestionar usuaris</title>
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

    <div>
        <h1>Gestionar Usuaris</h1>
        <table border="1px">
            <?php
                $usuari = explode("\n",$f);

                foreach($usuari as $user => $key){
                    $usuaris = $usuari[$user];
                    $nomUsuari = explode(":",$usuaris);

                    for($i=0; $i<sizeof($nomUsuari);$i+=2){
                        echo "<tr>
                                <td>".$nomUsuari[$i]."</td>
                                <form action='formModificarUsuari.php' method='POST'><td><button type='submit' name='nom_usuari' value=".$nomUsuari[$i].">Modificar</button></td></form>
                                <form action='formEliminarUsuari.php' method='POST'><td><button type='submit' name='nom_usuari' value=".$nomUsuari[$i].">Esborrar</button></td></form>
                            </tr>";
                    }
                }
                fclose($fitxer);
            ?>
        </table>
    </div>
</body>
</html>