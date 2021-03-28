<?php
    $Id=$_REQUEST['Id'];

    $parancs="DELETE FROM szerszamok WHERE Id=$Id";

    $kapcsolat=mysqli_connect("localhost","root","","szerszam");
    mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:lista.php");

?>