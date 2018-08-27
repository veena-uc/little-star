<?php

$a = 1;
$b = 2;
$res = $a + $b;
for($i=3; $i<10; $i++){
	$a = $b; 
	$b = $res;
	$res = $a + $b;
	if($res % 2 == 0){
		echo $res . "\n";
	}
}
echo $res;

?>
