<?php
$v="";
for ($i=1;$i<=100;$i++){
	
	if (($i % 3 == 0) && ($i % 5 == 0)) {
		$v = "bisbas";
	} elseif ($i % 3 == 0) {
		$v = "bis";
	} elseif ($i % 5 == 0) {
		$v = "bas";
	} else {
		$v = $i;
	}
	
	echo $v."<br>";

}
?>