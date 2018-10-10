<?php

if( isset($_POST['basicinformation'])){
	echo "Your name is :" .$_POST['Name'];
	echo "<br>";
	if($_POST['Age']>=18){
		echo "You are adults";
	}else if($_POST['Age']<=17){
		echo "You are still minor";
	}
	echo "<br>";
	echo "Your address is :" .$_POST['Address'];
}







if( isset($_POST['add_submit']) OR isset($_POST['substract_submit'])){
	$add=($_POST['Firstnumber'])+($_POST['Secondnumber']);
	$substract=($_POST['Firstnumber'])-($_POST['Secondnumber']);
	echo "The sum is :" .$add;
	echo "<br>";
	echo "The difference is :" .$substract;
}



