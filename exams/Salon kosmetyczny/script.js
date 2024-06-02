function Check()
{
    var cena = 0;

    for(var i=0; i<formularz.maciek.length; i++)
    {
        if(formularz.maciek[i].checked)
        {
            cena += parseInt(formularz.maciek[i].value);
        }
    }

    document.getElementById("output").innerHTML = "Cena zabiegów: " + cena;
}