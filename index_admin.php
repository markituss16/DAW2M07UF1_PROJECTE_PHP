<?php
session_name("admin");
session_start();
?>

<html>
    <h1>Benvingut a l'interficie de l'administrador!</h1>
    <?php echo "Sessió de l'usuari: ".session_name()."<br>";?>