function printAll(name, pesel, phone, date, form , doctor, permission, comment, out)
{
    var sum = 'Imię i nazwisko: ' + name + "<br>PESEL: " + pesel + "<br>Telefon: " + phone + "<br>Data: " + date;

    for(var i=0; i<form.visit.length; i++)
        if(form.visit[i].checked)
            sum +=  "<br>Typ wizyty: " + form.visit[i].value + "<br>";
            
    sum += "Doktor: " + doctor;

    if(permission)
        sum += "<br>Zezwalam na przetwarzanie moich danych";
    else 
        sum += "<br>Nie zezwalam na przetwarzanie moich danych";

    sum += "<br>Uwagi: " + comment;

    out.innerHTML = sum;
}