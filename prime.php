<?php
for($i=2;$i<=10;++$i){
	if(122%$i==0)
	{
		$flag=0;
		break;
	}
	else
	{
		$flag=1;
	}
}

if($flag==0)
{
	print("it is not a prime");}
if($flag==1){
	print("it is a prime number");
}	
?>

