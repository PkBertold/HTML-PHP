<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="max-width: 1100px;">
    
<?php
    $parancs="SELECT * FROM szerszamok;";
    
    $kapcsolat=mysqli_connect("localhost","root","","szerszam");
    $eredmeny=mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
?>

<div style="width:200px;float:left;">Név</div>
<div style="width:200px;float:left;">Email</div>
<div style="width:200px;float:left;">Termék</div>
<div style="width:200px;float:left;">Megjegyzes</div>
<br><br>

<?php
    while($sor=mysqli_fetch_array($eredmeny,MYSQLI_ASSOC))
    {
?>

<div style="width:200px;float:left;"><?php print($sor['nev']); ?></div>
<div style="width:200px;float:left;"><?php print($sor['email']); ?></div>
<div style="width:200px;float:left;"><?php print($sor['termek']); ?></div>
<div style="width:200px;float:left;"><?php print($sor['megjegyzes']); ?></div>

<form action="modosit.php" style="width:100px;float:left;">
    <input type="hidden" name="Id" value="<?php print($sor['Id']);?>">
    <input type="submit" value="Módosít"></form>
<form action="torol.php" style="width: 100px;float:left;">
    <input type="hidden" name="Id" value="<?php print($sor['Id']);?>">
    <input type="submit" value="Töröl">
</form>

<br>

<?php
    }
?>
<br><br><br><br>
<form method="get" action="index.html" style="float:right;">
        <button type="submit">Új Rendelés</button>
    </form>

</body>
</html>