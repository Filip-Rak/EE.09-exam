<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method = "POST">
        Liczba <input type="number" name = "num" value = "1" oninput="herb(parseInt(this.value), out)">
        <input type="submit">
    </form>

    <?php
        $sum = 1; 

        for($i=1; $i<=$_POST['num']; $i++)
            $sum *= $i;

        echo "PHP: " . $sum;
    ?>

    <br>JS: <span id="out"></span>
    
    <script src="script.js"></script>
</body>