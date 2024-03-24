function Calc()
{
    var field = inp.value;

    var cans  = field / 4;
    cans = Math.ceil(cans);

    document.getElementById("output").innerHTML = cans;
}