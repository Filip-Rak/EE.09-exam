function Calc()
{
    var size = inpSize.value;
    var multiplier = 0;

    for(var i=0; i<formularz.type.length; i++)
    {
        if(formularz.type[i].checked)
            multiplier = parseInt(formularz.type[i].value);
    }

    document.getElementById("output").innerHTML = size * multiplier;
}