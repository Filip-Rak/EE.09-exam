function Calc()
{
    var type = "";
    for(var i=0; i<car.rad.length; i++)
    {
        if(car.rad[i].checked)
            type = car.rad[i].value;
    }

    var multi = 1;
    switch(type)
    {
        case "gazie": 
            multi = 3.40;
        break;

        case "benzynie": 
            multi = 5.08;
        break;

        case "dieselu": 
            multi = 3.00;
    }
    
    var rd = (road.value > 0) ? road.value : 0;
    var price = rd * multi;

    var str = "Jadąc " + marka.value + " " + model.value + " na " + type;
    str += " przejechałem: " + rd + " km z kosztem: " + price + " zł";

    document.getElementById("outputJS").innerHTML = str;
}