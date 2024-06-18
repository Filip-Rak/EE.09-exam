function calc(pln, out)
{
    var curr = [["EUR", 4.62], ["USD", 4.10], ["UAH", 0.15], ["RBL", 0.056]];
    var output = "";

    for(var i=0; i<curr.length; i++){
        var a = pln / curr[i][1];
        output += "-PLN->" + curr[i][0] + " " + a.toFixed(2) + "<br>";
    }

    out.innerHTML = output;
}
