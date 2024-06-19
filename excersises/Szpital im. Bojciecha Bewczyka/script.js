alert("Robione na rozdzilczości 1920, nie układa się dobrze poniżej 1400");

function Send()
{
    var text = "";
    var name = "<b>Imię i nazwisko:</b> " + firstname.value + " " + surname.value  + "<br>";
    text += name;

    var wiek = "<b>Wiek:</b> " + age.value + "<br><br>";
    text += wiek;

    for(var i=0; i<formularz.gender.length; i++)
    {
        if(formularz.gender[i].checked)
            text += "<b>Płeć:</b> " + formularz.gender[i].value  + "<br>";
    }


    text += "<b>Choroby:</b> <br>";

    for(var i=0; i<formularz.illness.length; i++)
    {
        if(formularz.illness[i].checked)
            text += formularz.illness[i].value  + "<br>";
    }


    for(var i=0; i<formularz.doctorRadio.length; i++)
    {
        if(formularz.doctorRadio[i].checked)
            text += "<b>Lekarz:</b> " + formularz.doctorRadio[i].value  + "<br>";
    }


    text += "<br>";

    var meetingDate = "<b>Data spotkania:</b> " + meetDate.value + "<br>";
    text += meetingDate;

    var meetingHour = "<b>Godzina spotkania:</b> " + meetTime.value + "<br><br>";
    text += meetingHour;

    if(uwagi.value != "")
        text += "<b>Uwagi:</b> " + uwagi.value + "<br>";
    else 
        text += "<b>Uwagi:</b> Brak<br>";


    if(agreement.checked)
        text += "<br><i>Użytkownik zgodził się na warunki umowy <br></i>";
    else
        text += "<br><i>Użytkownik nie zgodził się na warunki umowy <br></i>"


    document.getElementById("output").innerHTML = text;
}