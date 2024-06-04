function herb(nr, amount, out)
{
    var price = 0;

    switch(nr)
    {
        case 1: price = 5; break;
        case 2: price = 7; break;
        case 3: price = 10; break;
    }

    out.innerHTML = price * amount;
}
