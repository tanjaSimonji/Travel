<!DOCTYPE html>
<html>

<head>
    <title> Travel </title>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
</head>

<body>
    <form method="get" action="../slanje_destinacije.php" enctype="text/plain">
        <input id="dugme_pretrazi" type="submit" value="Pretraga">
        <input type="text" id="pretraga" name="destinacija" placeholder="Nadji destinaciju">
    </form>
    <div class="img_travel">
        <img src="../slike/Travel2.png" width=" 200" height="50" alt="image">
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="../index.html"> O NAMA</a></li>
            <li><a href="svi_letovi.php">SVI LETOVI</a></li>
            <li><a href="najposecenija_mesta.html">NAJPOSECENIJA MESTA</a></li>
            <li><a href="galerija.html">GALERIJA</a></li>
            <li> <a href="kupi_kartu.php">KUPI KARTU</a></li>
        </ul>
    </nav>
    <hr>
    <h1> SVI LETOVI: </h1>
    <hr>

    <h2> Izaberi datum: </h2>

    <label id="datum" for="Datum"></label>
    <input type="date" id="datum" name="Izaberi datum:">

    <table>
        <tr>
            <th><b>OD</b></th>
            <th><b>DO</b></th>
            <th><b>VREME POLAZKA</b></th>

        </tr>
        <tr>
            <td><b>BEOGRAD</b></td>
            <td><b>PARIZ</b></td>
            <td><b>8:00</b></td>

        </tr>
        <tr>
            <td><b>BEOGRAD</b></td>
            <td><b>MADRID</b></td>
            <td><b>17:00</b></td>

        </tr><tr>
            <td><b>BEOGRAD</b></td>
            <td><b>SARAJEVO</b></td>
            <td><b>20:00</b></td>
        </tr>
        </tr><tr>
            <td><b>BEOGRAD</b></td>
            <td><b>LONDON</b></td>
            <td><b>10:00</b></td>
        </tr>
        </tr><tr>
            <td><b>BEOGRAD</b></td>
            <td><b>BERLIN</b></td>
            <td><b>20:00</b></td>
        </tr>
        </tr><tr>
            <td><b>BEOGRAD</b></td>
            <td><b>TOKIO</b></td>
            <td><b>18:00</b></td>
        </tr>
        </tr><tr>
            <td><b>BEOGRAD</b></td>
            <td><b>NEW YORK</b></td>
            <td><b>22:00</b></td>
        </tr>
<!-- <?php 
    require_once("../konekcija.php");

    $query = "SELECT Od, Do, VremePolaska FROM let";
    foreach($konekcijaMySQLi->query($query) as $red)
    {
        echo "<tr>";
        printf("<td>%s</td>", $red['Od']);
        printf("<td>%s</td>", $red['Do']);
        printf("<td>%s</td>", $red['VremePolaska']);
        echo "</tr>";
    }
    $numb = "Fred" + 1;
    var_dump($numb)
?> -->

    </table>

    <hr>
    <footer>
        <br>


        <div id="kontakt">
            &#128205; <b>&nbsp;Adresa:</b> Adresa 1, Novi Sad<br>
            &#128222; <b>Telefon:</b> 070 000 000<br>
            &#128231; <b>Email:</b> email@email.com<br>
            &#128221; <a href="cesto_postavljana_pitanja.html">Često postavljena pitanja
                ...</a> <br>

            <br>
        </div>
        <fieldset>
            <legend>Prijavi se na naš Newsletter za najnovije vesti i specijalne ponude:</legend>
            <b>Vaša email adresa: </b> <input id="email" type="email" placeholder="email@email.com">
            <input id="dugme" type="submit" value="Pošalji">
        </fieldset>

        <hr>
    </footer>
</body>

</html>