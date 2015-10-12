<?php
session_start();
$youPlay=$_POST["xor0"];
$computerPlays= ($youPlay=="0" ?"X" :"0");
$_Sesion["computerPlays"] 	= $computerPlays;
$_Sesion["youPlay"] 		= $youPlay;
header("location: youPlay.php?state=0");
?>