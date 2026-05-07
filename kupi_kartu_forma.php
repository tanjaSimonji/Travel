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
require("konekcija.php");
require("Karta.php");
$od = $_POST["Od"];
$do = $_POST["Do"];
$vremePolaska = $_POST["VremePolaska"];
$datumPolaska = $_POST["DatumPolaska"];
if(ctype_digit($_POST["BrojKarata"])) 
    $brojKarata = $_POST["BrojKarata"];
else 
    echo "Za broj karata unesite broj!";

$testEmail = $_POST["Email"];
if(filter_var($testEmail, FILTER_VALIDATE_EMAIL)) {
    $email = $_POST["Email"];
}
else
    echo "$email nije validna mejl adresa!";

$karta = new Karta($od,$do,$vremePolaska,$datumPolaska,$brojKarata,$email);

$getId = $karta->getId();
$getOd = $karta->getOd();
$getDo = $karta->getDo();
$getVremePolaska = $karta->getVremePolaska();
$getDatumPolasak = $karta->getDatumPolaska();
$getBrojKarata = $karta->getBrojKarata();
$getEmail = $karta->getEmail();

$id = rand();
$stmt = $konekcijaMySQLi->prepare("INSERT INTO karta (Id, Od, Do, VremePolaska, DatumPolaska, BrojKarata, Email) VALUES(?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssis", $getId, $getOd, $getDo, $getVremePolaska, $getDatumPolasak, $getBrojKarata, $getEmail);    
if($stmt->execute() == TRUE)
{
   $karta->poruka();
}
?>
<br><br>
<form method="POST" action="./izmeni_vreme_polaska.php">
    <input type="hidden" name="karta_id" value="<?php echo $karta->getId(); ?>">

    <br><br>
    <p>Promeni vreme polaska:</p>
    <select name="VremePolaska">
        <option selected> Izaberi vreme </option>
        <option>13:00</option>
        <option>15:00</option>
        <option>17:00</option>
        <option>20:00</option>
        <option>22:00</option>
    </select>
    <input id="dugme" type="submit" value="Promeni">
</form>

<form method="POST" action="./obrisi_kartu.php">
    <input type="hidden" name="karta_id" value="<?php echo $karta->getId(); ?>">
    <p>Poništi kartu:</p>
    <input id="dugme" type="submit" value="Poništi">
</form>
</body>

</html>