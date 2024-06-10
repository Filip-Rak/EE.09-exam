function Robert()
{
    var typ = type.value;
    var perLiter = 0;

    if(typ == 1)
        perLiter = 4;
    else if(typ == 2)
        perLiter = 3.5;

    var cost = perLiter * amount.value;

    output.innerHTML = "koszt paliwa: " + cost + "zł";
}