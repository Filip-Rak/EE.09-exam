<!DOCTYPE html>
<head>
    <title>Przychodnia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section id="logo">
            <img id="loggo" src="strzykawka.png">
        </section>
            <section id="napis"><h1>Ogólnopolski Próbny Egzamin Zawodowy E14</h1></section>
        <section id="haslo">
            <img src="przychodnia.png">
        </section>
    </header>
    <section id="navi">
        <button type="button"><a href="kwerendy.txt">Kwerendy</a></button>
        <button type="button" href="przychodnia.sql"><a href="przychodnia.sql">Baza danych</a></button>
    </section>
    <section id="main">
        <form method="POST" id="fm">
            imie i nazwisko <input type="text" name="fsname" id="fsname" required> <br>
            numer PESEL <input type="number" name="pesel" id="pesel" pattern="[0-9]{11}"> <br>
            numer telefonu <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"> wzór: 000-000-000<br>
            Wizyta: <br>
            <input type="radio" value="NFZ" name="visit" id="visit" checked=true > NFZ <br>
            <input type="radio" value="Płatna" name="visit" id="visit"> Płatna <br>
            <input type="radio" value="Abonament" name="visit" id="visit"> Abonament <br>
            data wizyty: <input type="date" name="data" id="data"> <br>
            Lekarz: 
            <select name="doc" id="doc" value="Chirurg(Bonifacy)">
                <option value="Chirurg(Bonifacy)">Chirurg(Bonifacy)</option>
                <option value="Genokolog(Fafal Zabłot)">Genokolog(Fafal Zabłot)</option>
                <option value="Ortopronto(CZarek)">Ortopronto(CZarek)</option>
                <option value="Dentysta(Jooo Sep Stylinj)">Dentysta(Jooo Sep Stylinj)</option>
                <option value="Magik(Mateusz)">Magik(Mateusz)</option>
            </select>
            <br>
            <input type="checkbox" name="perm" id="perm"> Wyrażam zgodę na przetwarzanie danych osobowych <br>

            Uwagi:  <br>
            <textarea name="uwagi" id="uwagi">Brak</textarea>
            <br>
            <input type="submit" value="Rezerwuj PHP">
            <button type="button" onclick="printAll(fsname.value, pesel.value, phone.value, data.value, fm , doc.value, perm.checked, uwagi.value, outputJs)">Rezewuj JS</button>
        </form>
       <section class="outs">
        <?php
                echo "<h4>PHP:</h4>";
                echo "Imię i nazwisko: " . $_POST['fsname'] . "<br>";
                echo "PESEL: " . $_POST['pesel'] . "<br>";
                echo "Telefon: " . $_POST['phone'] . "<br>";
                echo "Wizyta: " . $_POST['visit'] . "<br>";
                echo "Data wizyty: " . $_POST['data'] . "<br>";
                echo "Wybrany lekarz: " . $_POST['doc'] . "<br>";

                if(isset($_POST['perm']))
                    echo "Wyrażam zgodę na przetwarzanie moich danych osobowych<br>";
                else 
                    echo "Nie wyrażam zgody na przetwarzanie moich danych osobowych<br>";

                echo "Uwagi: " . $_POST['uwagi'];
            ?>
       </section>
       <section class="outs">
           <h4>JS: </h4>
           <span id="outputJs"></span>
       </section>
        
    </section>
    <footer style="clear:both">
        <h3>Autor strony: 2345675676</h3>
    </footer>
    <script src="script.js"></script>
</body>