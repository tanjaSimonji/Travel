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
            <li> <a href="pages_html/kupi_kartu.php">KUPI KARTU</a></li>
        </ul>
    </nav>
    <hr>
    <h1> LETOVI: </h1>
    <hr> 

    <table>
        <tr>
            <th><b>OD</b></th>
            <th><b>DO</b></th>
            <th><b>VREME POLAZKA</b></th>
            <th></th>

        </tr>
<?php 
    require_once("konekcija.php");
    $destinacija = $_GET["destinacija"];

    $query = "SELECT Od, Do, VremePolaska FROM let WHERE Do='$destinacija'";
    $rezultat = $konekcijaMySQLi->query($query);

    foreach($konekcijaMySQLi->query($query) as $red)
    {
        echo "<tr>";
        printf("<td>%s</td>", $red['Od']);
        printf("<td>%s</td>", $red['Do']);
        printf("<td>%s</td>", $red['VremePolaska']);
        echo "<td><input id='dugme' type='submit' value='Kupi'></td>";
        echo "</tr>";
    }

?>

    </table>

    <hr>