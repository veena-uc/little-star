<?php
$res=0;
for($i=0;$i<10;$i++)
{
	if($i % 3 == 0)
	{
		$res=$res+$i;
		continue;
	}	
	if($i%5==0)
	{
		$res=$res+$i;
		continue;

	}
}
echo $res ."\n";
?>
