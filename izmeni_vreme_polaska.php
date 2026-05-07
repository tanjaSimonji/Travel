<!DOCTYPE html>
<html>

<head>
    <title> Travel </title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body>
    <form method="get" action="slanje_destinacije.php" enctype="text/plain">
        <input id="dugme_pretrazi" type="submit" value="Pretraga">
        <input type="text" id="pretraga" name="destinacija" placeholder="Nadji destinaciju">
    </form>
    <div class="img_travel">
        <img src="slike/Travel2.png" width=" 200" height="50" alt="image">
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="index.html"> O NAMA</a></li>
            <li><a href="pages_html/svi_letovi.php">SVI LETOVI</a></li>
            <li><a href="pages_html/najposecenija_mesta.html">NAJPOSECENIJA MESTA</a></li>
            <li><a href="pages_html/galerija.html">GALERIJA</a></li>
            <li> <a href="pages_html/kupi_kartu.html">KUPI KARTU</a></li>
        </ul>
    </nav>

    <br>
    <br>

<?php

$id = $_POST["karta_id"];
$vremePolaska = $_POST["VremePolaska"];

require("konekcija.php");

try {

$konekcijaPDO->beginTransaction();

$sql1 = "SELECT VremePolaska FROM karta WHERE Id = :id";
$stmt1 = $konekcijaPDO->prepare($sql1);
$stmt1->bindParam(":id", $id);
$stmt1->execute();
$result = $stmt1->fetchAll();
$staroVremePolaska = $result[0]['VremePolaska'];

$sql2 = "UPDATE karta SET VremePolaska = :vremePolaska WHERE Id = :id";
$stmt2 = $konekcijaPDO->prepare($sql2);
$stmt2->bindParam(":vremePolaska", $vremePolaska);
$stmt2->bindParam(":id", $id);
if($staroVremePolaska === $vremePolaska) {
echo "Izabrali ste isto vreme";
}
else {
echo "Novo vreme polaska je $vremePolaska";
}
$stmt2->execute();
$konekcijaPDO->commit();
}
catch(PDOException $e) {

$konekcijaPDO->rollBack();
echo $e->getMessage();
}



?>
</body>

</html>