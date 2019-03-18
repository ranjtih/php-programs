<?php
$a=array('name2'=>'ranjith','name1'=>'anoop','name3'=>'kashyap');
arsort($a);
foreach($a as $t1=>$t)
{
	print($t1."\t".$t."\n");
}

?>
/*output
name2	ranjith
name3	kashyap
name1	anoop*/
