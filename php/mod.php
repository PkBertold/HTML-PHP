<?php

    $Id=$_REQUEST['Id'];
    $nev=$_REQUEST['nev'];
    $email=$_REQUEST['email'];
    $termek=$_REQUEST['termek'];
    $megjegyzes=$_REQUEST['megjegyzes'];
   
    $parancs=
    "UPDATE szerszamok SET nev='$nev',email='$email',termek='$termek',megjegyzes='$megjegyzes' WHERE Id=$Id;";

    $kapcsolat=mysqli_connect("localhost","root","","szerszam");
    mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:lista.php");
?>