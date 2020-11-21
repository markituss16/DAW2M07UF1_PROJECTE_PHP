<?php
session_start();
if (isset($_SESSION)){

    if(!isset($_SESSION["nom_usuari"])){
        header("Location: autenticacio.php");
    }

    if(!isset($_SESSION["quantitat-productes"])){
        $_SESSION["quantitat-productes"] = 0;
    }else{
        for($i=1; $i<=10; $i++){
            if(isset($_POST["var-ordinador:" . $i]) && $_POST["var-ordinador:" . $i] == "existeix"){
                if($_POST["quant-ordinador:" . $i] != 0){
                    if(isset($_SESSION["ordinador:" . $i])){
                        if($_SESSION["ordinador:" . $i] != $_POST["quant-ordinador:" . $i]){
                            $_SESSION["quant-productes"] -= $_SESSION["ordinador:" . $i];
                            $_SESSION["ordinador:" . $i] = $POST["quant-ordinador:" . $i];
                            $_SESSION["quant-productes"] += $POST["quant-ordinador:" . $i];
                        }
                    }else{
                        $_SESSION["ordinador:" . $i] = $POST["quant-ordinador:" . $i];
                        $_SESSION["quant-productes"] += $_POST["quant-ordinador:" . $i];
                    }
                }
            }else if(!isset($POST["var-ordinador:" . $i]) && !isset($GET['return'])){
                if(isset($_SESSION["ordinador:" . $i])){
                    $_SESSION["quant-productes"] -= $_SESSION["ordinador:" . $i];
                    unset($_SESSION["ordinador:" . $i]);
                }
            }
        }
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Productes</title>
    <link rel="stylesheet" href="./css/estils.css">
</head>
<body>
    <form action="./productes.php" method="POST">
        <a href="./index.php" id="btn-logout" class="botons">Tancar la sessió</a>
        <input id="btn-actual-carret" type="submit" class="botons" value="Afegir productes al carret"><br>
        <a id="enllac-carret" href="./carret.php">
            <div class="carret">
                <img src="#image" id="img-carret"> <!--Cal afegir l'enllaç a la imatge del carret-->
                <span id="quant-carret">
                    <?php
                        if(isset($_SESSION)) echo ($_SESSION["quant-productes"])
                    ?>
                <span>
            </div>
        </a>
        <div class="productes">
            <?php
            $fitxer_productes = fopen("./productes/productes.txt","r") or die("No s'ha pogut llegir l'arxiu!");

            for($i=1; $i<=10; $i++){
                $infoProductes = fgets($fitxer_productes);
                $titolProductes = explode("\t",$infoProductes[0]);
                $preuProductes = explode(" : ",$preuProductes[1]);
                echo ('<div class="productes">');
                echo ('<img src="/imatges:' .$i. '.jpg');
                echo ('<span class="titolProductes">' .$titolProductes. '</span>');
                echo ('<span class="preuProductes">' .$preuProductes. 'euros</span>');

                if(isset($_SESSION["productes:" . $i])){
                    if($_SESSION["productes:" . $i] == 0){
                        echo('<input type="checkbox" name="var-ordinador:' .$i. '">');
                    }else{
                        echo('<input type="checkbox" name="var-ordinador:' .$i. '"checked>');
                    }
                    echo ('<input type="number" name="quant-productes:' .$i. '"value="' .$_SESSION["productes:" .$i] .'"max=10" min="0"<br>');
                }else{
                    echo('<input type="checkbox" name="var-ordinador:' .$i. '">');
                    echo ('<input type="number" name="quant-ordinador:' .$i. '" value="0" max="10" min="0"><br>');
                }
                echo('</div>');
            }
            fclose($fitxer_productes);
            ?>
        </div>
    <form>
</body>
</html>