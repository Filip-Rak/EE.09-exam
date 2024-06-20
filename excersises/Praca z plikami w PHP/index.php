<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
</head>
<body>
    <fieldset style="width:250px">
        <legend>Tworzenie pliku</legend>

        <form action="save.php" method="POST">
            Nazwa pliku: <input type="text" name="fname" required> <br><br><br>
            <textarea name="text" cols="50" rows="5"></textarea> <br><br>

            <input type="submit" value="Zapisz">
        </form>
    </fieldset>

    <br>
    <br>
    <br>
    <br>
    <br>

    <fieldset style="width:250px">
        <legend>Odczytywanie pliku</legend>
        
        <form action="load.php" method="POST">
        
            <select name="choice">
                <?php
                    $files = glob("txts/*.txt");

                    for($i=0; $i<count($files); $i++)
                        echo "<option>".$files[$i]."</option>";
                ?>
            </select>

            <input type="submit" value="Wczytaj">
        </form>
    </fieldset>
</body>