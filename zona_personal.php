<?php
session_start();
$_SESSION["nom_usuari"];

if (isset($_SESSION["comandes"])){
    $comandes = $_SESSION["comandes"];
}else{
    $comandes = array();
}

$fitxer_usuaris="fitxers/usuaris.txt";
$fitxer = fopen($fitxer_usuaris,"r") or die ("No es pot llegir la llista d'usuaris");
$f = file_get_contents($fitxer_usuaris);

?>

<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estils.css">
        <title>Cataleg usuari</title>
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
            </ul>
        </nav>

<?php
$usuari = explode("\n",$f);

foreach($usuari as $user => $key){
    $usuaris = $usuari[$user];
    $dadesUsuaris = explode(":",$usuaris);
        if($_SESSION["nom_usuari"] == $dadesUsuaris[0]){
        echo "<br><h5>Dades de l'usuari ".$_SESSION["nom_usuari"].".</h5><br>";
        echo "Nom d'usuari: ".$dadesUsuaris[0].".<br>";
        echo "Nom: ".$dadesUsuaris[2].".<br>";
        echo "Cognoms: ".$dadesUsuaris[3].".<br>";
        echo "Direccio: ".$dadesUsuaris[4].".<br>";
        echo "Email: ".$dadesUsuaris[5].".<br>";
        echo "Telefon: ".$dadesUsuaris[6].".<br>";
        echo "VISA: ".$dadesUsuaris[7].".<br>";
        }
    }
?>

    </body>
</html>