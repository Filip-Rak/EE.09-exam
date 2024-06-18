<!DOCTYPE html>
<head>
    <title>Przychodnia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section id="container">
        <header>

            <section id="image">
            <img src="pic/logo.png">
            </section>

            <section id="napisLogo">
                Szpital im. Boitka Bewczyka
            </section>

            <section style="clear:both"></section>
        </header>

        <section class="sec1" id="sec1l">
            <form method="POST">

                <section id="names">
                    <section class="name">Imię: </section> 
                    <section class="name">Nawisko: </section> 
                    <section class="name">PESEL </section> 
                    <section class="name">Data przyjęcia: </section> 
                    <section class="name">Godzina rejestracji: </section> 
                </section>

                <section id="inputs">
                    <input type="text" name="Imię"> 
                    <input type="text" name="Nazwisko"> 
                    <input type="number" name="PESEL">
                    <input type="date" name="Data">
                    <input type="time" name="Godzina-Rejestracji">
                </section> 
                
                <section id="radios">
                    <input type="radio" name="Rodzaj-Wizyty" value="NFZ" checked="true"> NFZ
                    <input type="radio" name="Rodzaj-Wizyty" value="Prywatna"> Prywatnie
                    <input type="radio" name="Rodzaj-Wizyty" value="Na abonament"> Abonament <br><br>
                    
                    <input type="checkbox" name="checks[]" value="Wypisać recepte"> Wypisz recepte  <br> 
                    <input type="checkbox" name="checks[]" value="Zdjęcie z lekarzem"> Zdjęcie z lekarzem <br>
                </section>  
        </section>

        <section class="sec1" id="sec1r">
            
            <section class="doctor">
                <img src="pic/doge.jpg"> 

                <section id="details">
                    Imię: Albert <br>
                    Nazwisko: D’Angelo <br><br>

                    Specjalizacja: Mruganie
                </section>

            </section>
            
            <section class="doctor">
                <img src="pic/lamborda.jpg"> 

                <section id="details">
                    Imię: Antonio <br>
                    Nazwisko: Martini <br><br>

                    Specjalizacja: Lizanie łap
                </section>

            </section>
        </section>

        <section id="bottom">

            <section id="buttons">
                Lekarz: <select name="chosenDoctor">
                    <option>Losowy</option>
                    <option>Albert D’Angelo</option>
                    <option>Antonio Martini</option>
                </select> <br><br><br>

                <input type="reset">
                <input type="submit" value="Prześlij">

                </form>
            </section>

            <section id="results">
                <?php
                    define("br", "<br>");
                    $result = "";
            
                    //Text, number i radio
                    $tags = ["Imię", "Nazwisko", "PESEL", "Data", "Godzina-Rejestracji", "Rodzaj-Wizyty"];

                    for($i=0; $i<count($tags); $i++)
                    {
                        $field;

                        if(!empty($_POST[$tags[$i]]))
                            $field = $_POST[$tags[$i]];
                        else
                            $field = "Nie podano";

                        $result .= $tags[$i].": ".$field.br;
                    }
                    
                    //Checkboxy
                    if(!empty($_POST["checks"]))
                    {
                        $ar = $_POST["checks"];

                        for($i=0; $i<count($ar); $i++)
                            $result .= $ar[$i].br;
                    }

                    //Select
                    if(!empty($_POST["chosenDoctor"]))
                    {
                        $chosen = $_POST["chosenDoctor"];

                        if($chosen == "Losowy")
                        {
                            $doctors = ["Albert D’Angelo", "Antonio Martini"];
                            $result .= "Lekarz: ".$doctors[mt_rand(0, 1)]." (losowy)".br;
                        }
                        else
                            $result .= "Lekarz: ".$chosen.br;
                    }
                    else
                        $result .= "Nie wybrano doktora".br;
                    
                    echo $result;
                ?>
            </section>

        </section>
                    
    </section>

    <footer>
        Kontakt: <br>
        <section id="contact">
            TEL: 784350893 <br>
            E-MAIL: ekstremalnememuchy@10minutemail.com <br>
            Adres: Regionalne Centrum Edukacji Zawodowej w Bilgoraju
        </section>

        <section id="bottomPic">
            <img src="pic/footer-logo.png">
        </section>
    </footer>
</body>