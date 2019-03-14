<?php
class a
{
    static function fbnq($n)
    {
        $arr = [];
        for ($i=0; $i < $n; $i++) 
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
    static function fbnq2($n)
    {
        if($n == 1 || $n == 2){
            return 1;
        }
         return self::fbnq2($n-1) + self::fbnq2($n-2);
    }
}
echo a::fbnq(10);
echo "<hr/>";
for ($i = 1;$i<=10;$i++) 
    {
        echo a::fbnq2($i).'<br />';
    }