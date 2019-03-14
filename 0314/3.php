<?php
echo fbnq(10);
function fbnq($n)
{
    $arr = [];
    for ($i = 1;$i <= $n; $i++ )
    {
        if ($i <= 2)
        {
            $arr[] = 1;
        }
        else
        {
            $arr[] = ($i - 1) + ($i - 2);
        }
    }
    print_r($arr);
}