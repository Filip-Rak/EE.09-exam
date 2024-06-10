function Calc(x, y, z)
{
    var nums = [x, y, z];

    for(var i=0; i<nums.length; i++)
    {
        if(isNaN(nums[i]) || nums[i].length==0)
        {
            alert("wpisz poprawne dane");
            return 0;
        }
    }


    var max = nums[0] = parseFloat(nums[0]);
    for(var i=1; i<nums.length; i++)
    {
        nums[i] = parseFloat(nums[i]);
        if(nums[i] > max)    
            max = nums[i];
    }

    document.getElementById("output").innerHTML = max;
}