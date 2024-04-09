function Calc(square, out)
{
    var result = Math.ceil(square / 4);
    out.innerHTML = "[JS] Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " + result;
}