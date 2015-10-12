<?php 
session_start ();
$choice		=  $_POST["xor0"];
$notChoice	= ($choice=="Heads" ?"Tails":"Heads");
$_Sesion["computerPlays"] 	= $notChoice;
$_Sesion["youPlay"] 		= $choice	;
header("location: youPlay.php?state=0");
?>