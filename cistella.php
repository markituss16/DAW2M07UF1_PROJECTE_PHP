<?php
    if(!empty($comandes)){
    foreach($comandes as $valor){
        $products = explode(':',$valor);
            echo '<form name="afegirCarret" action="afegirCarret.php" method="POST">';
            echo '<li>Secció: '.$products[0].'<br>';
            echo 'Producte: '.$products[1].'<br>';
            echo 'Preu: '.$products[3].'<li>';
            echo '<input type="hidden" name="codi" value="'.$valor[0].'"/>';
            echo '<input type="submit" name="tramet" value="Eliminar"/></form>';
    }
    echo '<form name="crearComanda" action="crearComanda.php" method="POST">';
    echo '<input type="submit" name="tramet" value="Finalitza"/></form>';
    }else{
        echo 'El carret es troba buit';
    }
?>