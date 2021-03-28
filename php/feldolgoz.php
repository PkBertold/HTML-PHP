<?php
    $nev=$_REQUEST['nev'];
    $email=$_REQUEST['email'];
    $termek=$_REQUEST['termek'];
    $megjegyzes=$_REQUEST['megjegyzes'];

    $parancs=
    "INSERT INTO szerszamok (nev,email,termek,megjegyzes) VALUES ('$nev','$email','$termek','$megjegyzes');";
    
    $kapcsolat=mysqli_connect("localhost","root","","szerszam");
    $eredmeny=mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:index.html");

    while($rec = mysqli_fetch_assoc($result))
{
    echo "<option>".$rec['termek']."</option>";
}

?>