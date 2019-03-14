<?php
echo fbnq(10);
function fbnq($n)
{
    $arr = [];
    for ($i=0; $i <= $n; $i++) 
    { 
        if (count($arr) < 2) 
        {
            $arr[] = 1;
        }
        else
        {
            $arr[] = $arr[$i - 2] + $arr[$i - 1];
        }
    }
    print_r($arr);
}