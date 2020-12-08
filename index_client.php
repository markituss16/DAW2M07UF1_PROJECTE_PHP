<?php
session_name("client");
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
        <title>Pàgina del client</title>
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
            <li><a class="active" href="cataleg_usuari.html">Catàleg</a></li>
                <ul>
                    <li><a href="formAfegirProducte.php">Afegir productes</a></li>
                    <li><a href="modificarProducte.html">Modificar productes</a></li>
                    <li><a href="#">Eliminar productes</a></li>
                </ul>
            <li><a href="zona_personal.php">Zona personal</a></li>
            <li><a href="logout.php">Tancar sessió</a></li>
            <li>Afegir comanda
                <ul>
                    <?php
                        if(!empty($comandes)){
                            foreach($comandes as $valor){
                                $products = explode(':',$valor);
                                echo '<li>Secció: '.$products[0].'<br>';
                                echo 'Producte: '.$products[1].'<br>';
                                echo 'Preu: '.$products[3].'<li>';
                            }
                        }
                    ?>
                </ul>
            </li>
        </ul>
    </nav>

    <div>
        <form name="afegirComanda" action="afegirComanda.php" method="POST">
            <?php
            $productes = "fitxers/productes.txt";
            $fitxer_productes = fopen($productes,"r") or die("No s'ha pogut obrir el fitxer");
            $f = file_get_contents($productes);
            $producte = explode("\n",$f);

            foreach($producte as $i){
                $nomProducte = explode(":",$i);
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