var currency = [
    {
        short: "PLN",
        ini: "zł",
        rate: 1,
        displayed: "1",
    },

    {
        short: "EUR",
        ini: "euro",
        rate: 1,
        displayed: "1",
    },

    {
        short: "GBP",
        ini: "p",
        rate: 1,
        displayed: "1",
    },

    {
        short: "CHF",
        ini: "f",
        rate: 1,
        displayed: "1",
    },

    {
        short: "USD",
        ini: "d",
        rate: 1,
        displayed: "1",
    },

    {
        short: "RUB",
        ini: "r",
        rate: 1,
        displayed: "1",
    },

    {
        short: "CZK",
        ini: "k",
        rate: 1,
        displayed: "1",
    },

    {
        short: "JPY",
        ini: "y",
        rate: 1,
        displayed: "1",
    },
]

var currDate;

Setup("latest");


var slider = document.getElementById("precision-slide");
var output = document.getElementById("precision-output");

slider.oninput = function() 
{
  output.innerHTML = this.value;
  CalculateNew();
}


function Setup(date) 
{
    var ApiUrl = "https://api.exchangeratesapi.io/"+ date +"?base=PLN";

    fetch(ApiUrl)
        .then(response => response.json())
        .then(data => 
        {
            document.getElementById("callendar").value = data.date;
            currDate = data.date;
        for(var i=0; i<8; i++)
        {   
            currency[i].rate = data.rates[currency[i].short];
    
            var displayVal = GetCourse(i, data);

            var courseText = "Dany kurs: 1 zł  = " + displayVal + " " + currency[i].ini;
            document.getElementById(currency[i].short + "-course").innerHTML = courseText;

            document.getElementById(currency[i].short + "-calc").value = displayVal;
            currency[i].displayed = displayVal;
        }
       }
       )
}


function CalculatePrecision(str) //Ustaw precyzje na x miejsca po przecinku
{
    var n = str.indexOf(",")      
    var x = parseInt(slider.value)
    
    if(n == -1)  //Jezeli nie ma "," w ciagu, zwroc bez ucinania
        return str;

    if(x > 0)  //Jezeli precyzja jest wieksza niz 0, x++, poniewaz przeinek zabiera jedno miejsce                  
        x++;

    return str.slice(0, Math.abs(n) + x);  //
}

function Transform(rate)  
{
    rate = rate.toString();         //Zamien "." na ","
    rate = rate.replace(".", ",");  
    
    rate = CalculatePrecision(rate);

    return rate;
}


function GetCourse(index, data)
{
    var rate = data.rates[currency[index].short];  //Pobierz kurs
    
    rate = Transform(rate);  

    return rate;
}


function CalculateNew()
{
    var converter = 1;

    var call = document.getElementById("callendar").value;
    console.log(call);
    if(currDate != call)
    {
        Setup(call);
    }

    for(var i=0; i<8; i++)
    {
        var a = document.getElementById(currency[i].short + "-calc").value;
        var b = currency[i].displayed;
        
        if(a != b)
        {
            a = a.replace(",", ".");
            a = parseFloat(a);                
            
            if(a !=0 && !isNaN(a))
            {
                converter = Math.abs(a / currency[i].rate);
            }

            break;
        }
    }

    for(var i=0; i<8; i++)
    {
        var displayVal = Transform(currency[i].rate *= converter);

        document.getElementById(currency[i].short + "-calc").value = displayVal;
        currency[i].displayed = displayVal;
    }
    
}


function SetPrecision()
{
    output.innerHTML = slider.value;
    CalculateNew();
}