function Send()
{
    if(!agreement.checked)
        return 0;

    var str = "";
    str += fname.value + " " + sname.value + "<br>";

    var mail = email.value.toLowerCase();
    str += mail + "<br>";

    var serv = service.value;
    str += serv;

    document.getElementById("output").innerHTML = str;
}