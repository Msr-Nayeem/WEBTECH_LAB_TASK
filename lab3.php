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
	echo "<br>";
	var_dump($a);
	echo "<br>";
	print_r($a);
	echo "<br>";
	foreach($a as $c){
		echo $c."<br>";
	}
	$b=array("name"=> "n","age"=>24);
	foreach($b as $k=>$v){
		echo $k."-->".$v."<br>";
	}
	
	function show(){
		echo "<br> nayeem <br>";
	}
	show();
	
	function pshow($a){
		echo "<br>";
		echo $a;
		echo "<br>";
	}
	pshow("nayeemm");
	
	function add($a,$b){
		return $a+$b;
		
	}
	$sum=add(4,5);
	echo $sum;
	echo "<br>";
	echo add(4,6);
	echo "<br>";
	
	function op($a, $b){
		$arr=array($a,$b);
		return $arr;
	}
	$arr2=op(5,4);
	var_dump($arr2);
	echo "<br>";
		
	// echo $add(4,5);
	


?>