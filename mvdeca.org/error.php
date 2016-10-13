<?php

$var = mt_rand(1,4);

if ($var == '1')
{
	include('error_kushal.html');
}

elseif ($var == '2')
{
	include('error_dino.html');
}

elseif ($var == '3')
{
	include('error_warren.html');
}

else
{
	include('error_sai.html');
}

?>