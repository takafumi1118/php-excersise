<?php

$tshirt = 500;
$longp  = 700;
$Hoody = 900;

if( isset($_POST['product']) && $_POST['product']=="T-SHIRT"){
	$total = ($tshirt) * $_POST['Quantity'];
}elseif( isset($_POST['product']) && $_POST['product']=="Longs-Pants"){
	$total = ($longp) * $_POST['Quantity'];
}elseif( isset($_POST['product']) && $_POST['product']=="Hoody"){
	$total = ($Hoody)* $_POST['Quantity'];
}


if( isset($_POST['OnSale']) && $_POST['product']=="T-SHIRT"){
	$total = ($tshirt * 0.80) * $_POST['Quantity'];
}elseif( isset($_POST['OnSale']) && $_POST['product']=="Longs-Pants"){
	$total = ($longp * 0.90) * $_POST['Quantity'];
}elseif( isset($_POST['OnSale']) && $_POST['product']=="Hoody"){
	$total = ($Hoody * 0.95)* $_POST['Quantity'];
}

if( isset($_POST['basicinformation'])){
	echo "Your name:" .$_POST['Name'];
	echo "<br>";
	echo "Age:".$_POST['Age'];
	echo "<br>";
	echo "Product selected:" . $_POST['product'];
	echo "<br>";
	echo "Quantity:" . $_POST['Quantity'];
	echo "<br>";
	echo "Amount to be paid:" . $total;
	echo "<br>";
}

