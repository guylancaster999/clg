<?php 
session_start ();
$tossResult=  $_POST["coin"];
$notTossResult= ($tossResult=="Heads" ?"Tails":"Heads");
if (rand (0 , 1 )==1)
{
	$ret=$notTossResult.", You lose";
	if (rand (0 , 1 )==1)
    {
		$_Sesion["computerPlays"] 	= "X";
		$_Sesion["youPlay"] 		= "0";
	}
	else
	{
		$_Sesion["computerPlays"] 	= "0";
		$_Sesion["youPlay"] 		= "X";
	}
    header("location: do_computerPlays.php?state=0");
	
}
else
{
	$ret= $tossResult.", You win";
    header("location: chooseXorY.php?msg=".$ret);
}
?>