<?php
$folder    = 'D:/demo/';
$extension = "html";
$result = glob($folder.'*.'.$extension.'');

if ($result){
	$count = count($result);
	echo "There are ".$count." files with this extension.";
	
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
}else{
	echo "There are no files in this extension.";
}
?>