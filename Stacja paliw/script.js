function Calc()
{
    var dist = parseFloat(distance.value);
    var spl = parseFloat(spalanie.value);

    var result = dist / spl;
    
    document.getElementById("output").innerHTML = "Potrzebujesz: " + result + " litrów paliwa";
}