function calc(base, checks, perm, out)
{
    for(var i=0; i<checks.length; i++)
        if(checks[i].checked)
            base *= checks[i].value;

    if(perm)
        out.innerHTML = "Cena wynosi: " + base.toFixed(2) + "zł";
    else 
        out.innerHTML = "za darmo";
}