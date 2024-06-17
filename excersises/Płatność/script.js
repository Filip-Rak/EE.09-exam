function sign(fname, date, phone, form, list, out)
{
    var output = "Imię i nazwisko: " + fname;
    output += "<br>Data: " + date;
    output += "<br>Telefon: " + phone;
    output += "<br>Płatność: ";

    for(var i =0; i<form.ops.length; i++)
    {
        if(form.ops[i].checked)
            output += form.ops[i].value + "<br>";
    }

    output += "Zgody: <br>";

    for(var i=0; i<form.adds.length; i++)
    {
        if(form.adds[i].checked)
            output += form.adds[i].value + "<br>";
    }

    output += "<br>Ćwiczenie: " + list;

    out.innerHTML = output;
}
