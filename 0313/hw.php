<?php
$str='abccba';
echo hw($str);
function hw($str)
{
	$a = '';
	for ($i=strlen($str)-1; $i >= 0 ; $i--) 
	{ 
		$a .= $str[$i];
	}
	if ($str == $a) 
	{
		return "是";
	}
	else
	{
		return "不是";
	}
}