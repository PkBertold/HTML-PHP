<?php
$Id=$_REQUEST['Id'];

$parancs="SELECT * FROM szerszamok WHERE Id=$Id;";

$kapcsolat=mysqli_connect("localhost","root","","szerszam");
$eredmeny=mysqli_query($kapcsolat, $parancs);
mysqli_close($kapcsolat);
$sor=mysqli_fetch_array($eredmeny,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerszámok</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="content">
    <form action="mod.php" method="GET">


        <label for="nev">Név:</label>
        <input type="text" name="nev" id="nev" value="<?php print($sor['nev']); ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php print($sor['email']); ?>"><br>

        Válasszon Szerszámot
        <select name="termek" id="termeklista" size='1' value="<?php print($sor['termek']); ?>">
          <option value="">...</option>
          <option value="Kalapács">Kalapács</option>
          <option value="Fűrész">Fűrész</option>
          <option value="Fogó">Fogó</option>
          <option value="Csavarhúzó">Csavarhúzó</option>
          <option value="Bertold szerszáma">Bertold szerszáma</option>
          <option value="Ütvefúró">Ütvefúró</option>
        </select>
         <br>
         
        Megjegyzés: <br>
        <textarea name="megjegyzes" style="height: 100px;"><?php print($sor['megjegyzes']); ?></textarea><br>
        
        <input type="hidden" name="Id" value="<?php print($sor['Id']); ?>"><br>
        <input type="submit" value="Módosít">
    </form>
    <form method="get" action="index.html">
        <button type="submit">Új Rendelés</button>
    </form>
    <br>
    <form method="get" action="lista.php">
        <button type="submit">Mégse</button>
    </form>
    </div>
</body>


</html>

