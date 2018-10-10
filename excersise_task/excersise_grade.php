<?php

$grade=80;
if((100 >= $grade) &&  ($grade >= 95)){
	echo "A";
}else if((94 >= $grade) && ($grade >= 90)){
	echo "B";
}else if((89 >= $grade) && ($grade >= 85)){
	echo "C";
}else if((84 >= $grade) && ($grade >= 80)){
	echo "D";
}else if((79 >= $grade) && ($grade >= 75)){
	echo "E";
}else if(74 >= $grade){
	echo "Failed";
}

echo "<br>";

$num=10;
if($num%2 === 0){
	echo "even";
}else if($num%2 === 1){
	echo "odd";
}
?>