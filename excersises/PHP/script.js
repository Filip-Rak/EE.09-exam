function herb(num, out)
{
    var sum = 1;
    for(var i = 1; i<=num; i++)
       sum *= i;

    out.innerHTML = sum;
}
