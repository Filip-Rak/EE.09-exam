//uzywam AJAXa, bo nie mam innego pomyslu jak moglbym wyswietlic coś przy pomocy PHP bez odswiezania strony

var xhttp = new XMLHttpRequest();
var htmlDest = "top";

xhttp.onreadystatechange = function() 
{
    if(this.readyState == 4)
        document.getElementById(htmlDest).innerHTML = this.responseText;

};


Display("top");

function Display(dest)
{
    htmlDest = dest;
    RequestPHP("POST", "display.php");
}

function Delete()
{
    var id = form.id.value;
    var parameter = "id=" + id;

    if(id == "")
        document.getElementById("waitText").innerHTML = "Nie podano id!";
    else
    {
        htmlDest = "bottom";
        RequestPHP("GET", "delete.php?"+parameter);

        document.getElementById("waitText").innerHTML = "Proszę czekać...";
        Display("bottom");
    }
}

function RequestPHP(method, path)
{
    xhttp.open(method, path, false);
    xhttp.send();
}