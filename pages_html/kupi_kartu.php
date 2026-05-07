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

    </div>

    <nav class="navbar">
        <ul>
            <li><a href="../index.html"> O NAMA</a></li>
            <li><a href="svi_letovi.php">SVI LETOVI</a></li>
            <li><a href="najposecenija_mesta.html">NAJPOSECENIJA MESTA</a></li>
            <li><a href="galerija.html">GALERIJA</a></li>
            <li><a href="kupi_kartu.php">KUPI KARTU</a></li>
        </ul>
    </nav>

    <br>

    <form id="registracija" method="POST" action="../kupi_kartu_forma.php" enctype="multipart/form-data">
        <fieldset>

            <p> Od: </p>
            <select id="Izaberi_grad" name="Od">
                <option selected> Beograd </option>
            </select>

            <p> Do: </p>
            <select id="Izaberi_grad" name="Do">
                <option selected> Izaberi grad </option>
                <option> Beč </option>
                <option> Berlin </option>
                <option> New york </option>
                <option> Tunis </option>
                <option> Rim </option>
                <option> New york </option>
                <option> Beč </option>
                <option> Tokyo </option>
                <option> Seoul </option>
                <option> Halong Bay </option>
                <option> Bogota </option>
                <option> Phnom Penh </option>
                <option> Napa </option>
                <option> Singapore </option>
                <option> Tivat </option>
                <option> Pariz </option>
                <option> Dizeldorf </option>
                <option> Cirih </option>
                <option> Tivat </option>
                <option> Amsterdam </option>
                <option> Madrid </option>
                <option> Split </option>
                <option> Lisabon </option>
                <option> Barselona </option>
                <option> Moskva </option>
                <option> Sankt Peterburg </option>
                <option> Tbilisi </option>
                <option> Istanbul </option>
                <option> Atina </option>
                <option> Tunis </option>
                <option> Milano </option>
                <option> Kopenhagen </option>
                <option> Larnaka </option>
                <option> Podgorica </option>
            </select>


            <p> Datum polaska: </p>
            <label id="datum" for="Datum"></label>
            <input type="date" id="datum" name="DatumPolaska">

            <p>Vreme polaska:</p>
            <select name="VremePolaska">
                <option selected> Izaberi vreme </option>
                <option>13:00</option>
                <option>15:00</option>
                <option>17:00</option>
                <option>20:00</option>
                <option>22:00</option>
            </select>
            <p> Broj karata: </p>
            <input id="broj_karata" type="broj_karata" name="BrojKarata">

            <p> Email: </p>
            <input id="email_fieldset" type="text" placeholder="email@email.com" name="Email" required>

            <br>
            <input type="file" name="fajl">
            <br>

            <input id="dugme" type="submit" value="Kupi">
        </fieldset>
    </form>
    <hr>
    <br>
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