<?php

	$a="hi";
	echo "<h1>$a</h1>";
	echo "<br><h1>{$a}again<br><h1>";
	$b=array("name"=>"nayeem", "age"=>24);
	 echo $b["name"];
	 echo "<br>";
	$a=array(23,12,12,576,"nayeem");
	for($i=0; $i<count($a);$i++)
	{
		echo $a[$i]."<br>";
	}
	foreach($a as $c){
		echo $c."<br>";
	}
	$b=array("name"=> "n","age"=>24);
	foreach($b as $k=>$v){
		echo $k."-->".$v."<br>";
	}


?>