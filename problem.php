<?php
session_start ();
if (! isset ( $_SESSION ['r'] )) {
	$_SESSION ['r'] = mt_rand ( 0, 255 );
	$_SESSION ['g'] = mt_rand ( 0, 255 );
	$_SESSION ['b'] = mt_rand ( 0, 255 );
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>RGB Strike Game</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
html,body {
	height: 100%;
}
#wrap {
	min-height: 100%;
	height: auto !important;
	height: 100%;
	margin: 0 auto -60px;
}
#push,#footer {
	height: 60px;
}
#footer {
	background-color: #f5f5f5;
}
@media ( max-width : 767px) {
	#footer {
		margin-left: -20px;
		margin-right: -20px;
		padding-left: 20px;
		padding-right: 20px;
	}
}
.container {
	width: auto;
	max-width: 680px;
}
.container .credit {
	margin: 20px 0;
}
</style>
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<script>
    <!--
    function checkWindow()
    {
    	if (!document.hasFocus())
        	    location.href="./index.php";
    }
// -->
</script>
<script type="text/javascript">
	  var _gaq = _gaq || [];
 	 _gaq.push(['_setAccount', 'UA-32520755-1']);
 	 _gaq.push(['_trackPageview']);
	  (function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 	   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   	 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 	 })();
</script>
</head>
<body bgcolor="#ffffff" onContextmenu="return false" onload="setInterval('checkWindow()',2000)">
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<h1>Problem</h1>
			</div>
			<div onMouseDown="return false">
				<img src="make.php"><br>
				<br>
			</div>
			<form method="POST" action="./problem.php">
				<input class="span1" id="prependedInput" type="text" name="r"
					placeholder="R" maxlength="2"> <input class="span1"
					id="prependedInput" type="text" name="g" placeholder="G"
					maxlength="2"> <input class="span1" id="prependedInput" type="text"
					name="b" placeholder="B" maxlength="2"> <br>
				<button class="btn btn-primary" type="submit">提出</button>
			</form>
<?php
if ($_POST) {
	$r = hexdec ( $_POST ['r'] );
	$g = hexdec ( $_POST ['g'] );
	$b = hexdec ( $_POST ['b'] );
	$sr = $_SESSION ['r'];
	$sg = $_SESSION ['g'];
	$sb = $_SESSION ['b'];
	$zu = 0;
	$zu += abs ( $r - $sr );
	$zu += abs ( $g - $sg );
	$zu += abs ( $b - $sb );
	$_SESSION ['count'] ++;
	if ($sr == $r && $sg == $g && $sb == $b) {
		$_SESSION ['ok'] = true;
		$_SESSION ['time'] = $_SESSION ['time_tmp'];
		echo "<meta http-equiv=refresh content=0;URL='./name.php'>\n";
	} else {
		print_r ( "<div class=\"alert alert-error\">" );
		print_r ( "はずれ！ " );
		print_r ( $_SESSION ['count'] );
		print_r ( " 回目。以下が入力された色です。ズレは " . $zu . " です。</div>" );
	}
	$r2 = $_POST ['r'];
	$g2 = $_POST ['g'];
	$b2 = $_POST ['b'];
	if ($r2 == "")
		$r2 = 0;
	if ($g2 == "")
		$g2 = 0;
	if ($b2 == "")
		$b2 = 0;
	print_r ( "R=" . $r2 . ", G=" . $g2 . ", B=" . $b2 . "<br><br>" );
	print_r ( "<img src=\"make.php?" );
	print_r ( "r=" . $r . "&" );
	print_r ( "g=" . $g . "&" );
	print_r ( "b=" . $b . "\"><br><br>" );
}
?>
<button class="btn btn-info" type="button"
				onclick="location.href='./change.php'">変更</button>
			<br>
			<br>
			<font color="white">
<?php //echo dechex($_SESSION['r'])?>
<?php //echo dechex($_SESSION['g'])?>
<?php //echo dechex($_SESSION['b'])?></font>
		</div>
		<div id="push"></div>
	</div>
	<div id="footer">
		<div class="container">
			<p class="muted credit">
				<a href="./index.php">RGB Strike Game</a>
			</p>
		</div>
	</div>
</body>
</html>
<?php $_SESSION['time_tmp'] = time(true);//print_r($_SESSION['time_tmp'])?>