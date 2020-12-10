<?php
session_name("nom_usuari");
session_start();

if (isset($_SESSION["carret"])){
    $comandes = $_SESSION["carret"];
}else{
    $comandes = array();
}

?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Pàgina del client</title>
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

    <div>
        <form name="afegirCarret" action="afegirCarret.php" method="POST">
            <?php
            $productes = "fitxers/productes.txt";
            $fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
            $f = file_get_contents($productes);
            $producte = explode("\n",$f);

            foreach($producte as $i){
                $nomProducte = explode(":",$i);
                echo '<form name="afegirCarret" action="afegirCarret.php" method="POST">';
                echo '<div>';
                echo '<h1>'.$nomProducte[0].'<h1>';
                echo '<p>'.$nomProducte[3].' €</p></div>';
                echo '<input type="hidden" name="codi" value="'.$nomProducte[2].'"/>';
                echo '<input type="submit" name="afegir" value="Afegir al carret"/>';
            }
            ?>
        </form>
    </div>
    <br><br><h3>Index del client: Selecciona alguna de les opcions del menú</h3> 
</body>
</html>