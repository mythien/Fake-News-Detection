<?php

$out = array();

$value = "name1.py ".$_POST['msg'];

$command = escapeshellcmd($value);

$output = exec($command,$out,$result);

$i = "";

// foreach($out as $line) {
// 	//if($i>5){
// 		 $i .= $line."\n <br>";
// 	//}
//     //$i++;
// }

echo $out[0];

?>