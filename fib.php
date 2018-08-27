<?php
	$sum=0;
	 $a=1;
         $b=2;

	for($i=3;$i<10;$i++)
	{
		$res=$a+$b;
		$a=$b;
		$b=$res;
	while ($res<4000000)
	{
		if($res%2==0)
		{
		$sum+=$res;
			echo $sum . "\n";
		}
	}
}
?>
