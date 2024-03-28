function Send()
{
    var fname = fName.value;
    var sname = sName.value;

    var wynik = fname + " " + sname;

    for(var i=0; i<document.formularz.gender.length; i++)
    {
        if(document.formularz.gender[i].checked) 
            wynik += " " + document.formularz.gender[i].value;
    }
    
    for(var i=0; i<document.formularz.doctor.length; i++)
    {
        if(document.formularz.doctor[i].checked) 
            wynik += " " + document.formularz.doctor[i].value;
    }
    
    for(var i=0; i<document.formularz.badanie.length; i++)
    {
        if(document.formularz.badanie[i].checked) 
            wynik += " " + document.formularz.badanie[i].value;
    }

    var date = data.value;
    wynik += " " + date;

    if(recepta.checked)
        wynik += " wypisać receptę";
    else
        wynik += " bez recepty";

        
    document.getElementById("output").innerHTML = wynik;
}