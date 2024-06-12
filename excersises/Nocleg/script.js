const PER_PPL = 100;
const PER_CHL = 70;

function Calc(startDate, endDate, pplNmb, chlNmb, food, room, output)
{
    startDate = new Date(startDate);
    endDate = new Date(endDate);

    var duration = endDate.getTime() - startDate.getTime();
    duration /= (1000 * 60 * 60 * 24);

    var price = (pplNmb * PER_PPL) + (chlNmb * PER_CHL) + (food * (chlNmb + pplNmb));
    price *= duration;
    price += room * pplNmb;


    output.innerHTML = "JS: Cena będzie wynosić: " + ((price < 0) ? 0 : price) + "zł";
}