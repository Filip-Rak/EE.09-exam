<!DOCTYPE html lang = "pl">
<head>
    <title>Formularz</title>
    <meta charset = "utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Szybkie Auta Bzium Bzium</h1>
    </header>
    
    <section class="mid" id="left">
        <img src="pic/hel.png" width="100%" height="auto" style="padding-top: 20px;">
    </section>

    <section class="mid"  id="middle">
        <form name="car" method="POST">
             Marka: <input type="text" name="marka" id="marka"> <br>
             Model: <input type="text" name="model" id="model"> <br>

            <input type="radio" value="gazie" name="rad" checked="true"> Gaz: 
            <input type="radio" value="benzynie" name="rad"> Beznzyna: 
            <input type="radio" value="dieselu" name="rad"> Diesel: <br><br>

            Do przejechania km: <input type="number" name="road" id="road"> <br><br>

            <input type="submit" value="Policz z PHP">
            <button type="button" onclick="Calc()">Policz z JavaScript</button>

        </form>
        
    </section>

    <section class="mid" id="right">
        <img src="pic\police.png" width="90%" style="padding-top: 0px;">
    </section>

    <section id="bottom">
        <section id="resultsPHP">
            <h1>PHP</h1>

            <?php
                $marka = @$_POST["marka"];
                $model = @$_POST["model"];

                $multiply = 1;

                switch(@$_POST["rad"])
                {
                    case "gazie": 
                        $multiply = 3.40;
                        break;
                
                    case "benzynie": 
                        $multiply = 5.08;
                        break;

                    case "dieselu": 
                        $multiply = 4.00;
                        break;
                }

                if(!empty($_POST["road"]))
                {
                    ($_POST["road"] > 0) ? $road = $_POST["road"]: $road = 0;
                    $price = $road * $multiply;

                    $str = "Jadąc ".$marka." ".$model." na ".$_POST["rad"];
                    $str .= " przejechałem: ".$road." km z kosztem: ".$price." zł";

                    echo $str;
                }
                //else
                    //echo "Nie podano odległości";
        ?>
        
        </section>
        <section id="resultsJS">
                <h1>JavaScript</h1>
                <section id="outputJS"></section>
        </section>

    </section>
        
    <script src="script.js">    
    </script>
</body>