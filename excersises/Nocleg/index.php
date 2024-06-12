<!DOCTYPE html>
<head>
    <title>Wycieczka</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST">
        Data wyjazdu: <input type="date" id="startDate" name="startDate" value="2021-06-10"> <br>
        Data powrotu: <input type="date" id="endDate" name="endDate" value="2021-06-11"> <br>
        Ilość osób: <input type="number" id="pplNmb" name="pplNmb" min=0 value="0"> <br>
        Ilość dzieci: <input type="number" id="chlNmb" name="chlNmb" min=0 value="0"> <br>
        Wyżywienie: 
        <select id="food" name="food">
            <option value="0">Brak</option>
            <option value="40">Śniadanie</option>
            <option value="80">All inclusive</option>
        </select> <br>
        Pokój:
        <select id="room" name="room">
            <option value="0">Standarodwy</option>
            <option value="160">All inclusive</option>
        </select> <br><br>
        
        <button type="button" onclick="Calc(startDate.value, endDate.value, parseFloat(pplNmb.value), parseFloat(chlNmb.value), parseFloat(food.value), parseFloat(room.value), jsOutput)">Policz JS</button>
        <input type="submit" value="Policz PHP">
    </form> <br><br>

    <span id="jsOutput"></span>
    <br>

    <?php
        define("PER_PPL", 100);
        define("PER_CHL", 70);

        $startDate = @date_create($_POST['startDate']);
        $endDate = @date_create($_POST['endDate']);

        $duration = @date_diff($startDate, $endDate)->format("%d");
        $duration = @floatval($duration);

        $pplNmb = @intval($_POST['pplNmb']);
        $chlNmb = @intval($_POST['chlNmb']);
        $food = @intval($_POST['food']);
        $room = @intval($_POST['room']);

        $price = ($pplNmb * PER_PPL) + ($chlNmb * PER_CHL) + ($food * ($pplNmb + $chlNmb));
        $price *= $duration;
        $price += $room * $pplNmb;

        echo "PHP: Cena będzie wynosić: ".$price;
    ?>

    <script src="script.js">  
    </script>
</body>