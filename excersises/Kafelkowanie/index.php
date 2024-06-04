<!DOCTYPE html>
<head>
    <title>Kafelki</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST">
        Pole do pokafelkowania: <input type="number" name="square"> <br>
        <input type="radio" value="70" name="size" checked="true"> 20x20 
        <input type="radio" value="80" name="size"> 25x12  <br><br>

        <input type="submit"> <br><br>
    </form>

    <?php
        $square = @$_POST["square"];
        $multiplier = @intval($_POST["size"]);

        if(!empty($square) && !empty($multiplier))
        {
            ($square > 0) ? $sum = $square * $multiplier : $sum = 0;
            echo "Koszt kafelkowania będzie wynosić: ".$sum." zł";
        }
    ?>
</body>