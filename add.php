<?php
session_start();

function setNow($name, $time){
	$fp = fopen('standings.ini', 'a');
	fputs($fp, "$name=$time\n");
	fclose($fp);
}

function getPastTime($name){
	$best = 10000000;
	$array = parse_ini_file('standings.ini');
	foreach($array as $key => $value){
		if($key==$name){
			$best = min($best, $value);
		}
	}
	return $best;
}

if($_SESSION['ok']){
	$_SESSION['ok'] = false;
	$name = htmlspecialchars($_POST['name']);
	$time = ($_SESSION['count']-1)*30+$_SESSION['time'];
	if($time<getPastTime($name)){
		setNow($name, $time);
	}
	echo "<meta http-equiv=refresh content=0;URL='./index.php'>\n";
}
?>