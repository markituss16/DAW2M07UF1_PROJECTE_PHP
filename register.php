<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Registre d'usuari</title>
</head>
<body>
<?php
    if(($_POST["nom_usuari"]!="") && ($_POST["ctsnya"]!="")){
        echo "<b>AFEGIR UN NOU USUARI A LA WEB</b><br>";
        $fitxer_usuaris="/var/www/html/projecte_php_UF1/login-usuaris.txt";
        $usuari=$_POST["nom_usuari"]."/".$_POST["ctsnya"]."/"."\r\n"; //El caràcter '/' s'utilitza per a separar el nom de la contrasenya

        if (file_exists($fitxer_usuaris)){
            $fitxer=fopen($fitxer_usuaris,"a") or die ("No s'ha pogut afegir un nou usuari a la llista d'usuaris de web");
            fwrite($fitxer,$usuari);
            fclose($fitxer);
            echo "S'ha afegit l'usuari ".$_POST["nom"]." a la llista d'usuaris de la web.<br>";
            echo "Per a iniciar sessió, ves a <a href=login.html class='btn btn-dark m1-2'>Fes click</a>";
        }
        else{
            $fitxer=fopen($fitxer_usuaris,"w") or die ("No s'ha pogut crear la llista d'usuari de l'aplicació i afegir-ne el primer usuari");
            fwrite($fitxer,$usuari);
            fclose($fitxer);
            echo "S'ha creat el fitxer amb la llista d'usuaris i s'ha afegit ".$_POST["nom"]."a la llista d'usuaris de la web<br>";
            echo "S'ha afegit ".$_POST["nom"]."a la llista d'usuaris de la web.<br>";
            echo "Per a iniciar sessió, ves a <a href=login.html class='btn btn-dark m1-2'>Fes click</a>";
        }
    }else{
        echo "No hi ha dades per a la validació de l'usuari.<br>";
    }
?>
</body>
</html>