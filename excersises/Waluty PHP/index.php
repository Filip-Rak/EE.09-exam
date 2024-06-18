<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method = "POST">
        PLN: <input type="number" oninput="calc(parseFloat(this.value), out)">
    </form>
    
    <br><span id="out"></span>
    
    <script src="script.js"></script>
</body>