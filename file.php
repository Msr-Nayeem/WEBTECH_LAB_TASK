<?php
	
	echo "<br>";
	echo"Name : ".$_POST["uname"]."<br>";
	echo"Password : ".$_POST["pass"]."<br>";
	echo"Gender : ".$_POST["gender"]."<br>";
	echo"Skills : ";
	foreach($_POST["skills"] as $a)
	{
		echo $a.", ";
	};
	echo "<br>";
	echo"Department : ".$_POST["dept"]."<br>";
	echo"Address : ".$_POST["address"]."<br>";
	echo"Birthday: ".$_POST["birthday"]."<br>";
	echo "<br>";
	
	echo "<h1>Successful</h1>"."<br>";
	
?>
	
