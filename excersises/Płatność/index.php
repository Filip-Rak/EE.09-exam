<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method = "POST">
        Imię nazwisko: <input type="text" id="fname"> <br>
        Data: <input type="date" id="date"> <br>
        Telefon: <input type="tel" id="phone"> <br>

        <input type="radio" name="ops" value="Płatna pełna opcja" checked="true"> Płatna pełna opcja <br>
        <input type="radio" name="ops" value="Darmowa okrojona opcja"> Darmowa okrojona opcja <br>

        <input type="checkbox" name="adds" value="-Akceptuje regulamin"> Akceptuje regulamin <br>
        <input type="checkbox" name="adds" value="-Newsletter"> Newsletter <br>

        <select value = "Sztanga" id="list">
            <option value="Sztanga">Sztanga</option>
            <option value="Rowerek">Rowerek</option>
            <option value="Inne">Inne</option>
        </select>

        <button type="button" onclick="sign(fname.value, date.value, phone.value, this.parentNode, list.value, out)">Zapisz się</button>
    </form>
    
    <br><span id="out"></span>
    
    <script src="script.js"></script>
</body>