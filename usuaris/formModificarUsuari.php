<?php
    session_start();
    $nom = $_POST["nom_usuari"];

    echo "<html>
            <form action='modificarUsuari.php' method='POST'>
            <p>Canviar contrasenya => $nom</p>
            <p>Nova contrasenya:</p>
            <input name='ctsnya' type='text'><br>
            <input name='nom_usuari' type='hidden' value=".$nom."><br>
            <input type='submit' value='Modificar'>
            </form>
         </html>"
?>