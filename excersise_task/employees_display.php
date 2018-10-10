<?php

$Name      = $_POST['Name'];
$TIH       = $_POST['Time-in-hours'];
$TIM       = $_POST['Time-in-minutes'];
$TOH       = $_POST['Time-out-hours']; 
$TOM       = $_POST['Time-out-minutes'];
$TIsum     = $TIH + $TIM/60;
$TOsum     = $TOH + $TOM/60;
$Diff      = $TOsum - $TIsum;

if( isset($_POST['submit'])){
	if ($Diff < 8){
		$Salary = 4000 - ((8 - $Diff)*60*5);
	} elseif($Diff === 8){
		$Salary = 4000 ;
	} elseif($Diff > 8){
		$Salary = 4000 + (floor($Diff-8))*100 ;
	} else{
	 	$Salary = 0;
	}

	echo "Your name :" .$Name ;	
	echo "<br>" ;
	echo "Your salary :" .$Salary ;
}

?>