<?php
$a=array('name2'=>'ranjith','name1'=>'anoop','name3'=>'kashyap');
ksort($a);
foreach($a as $t1=>$t)
{
	print($t1."\t".$t."\n");
}

?>
