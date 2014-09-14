<?php
session_start ();
$_SESSION ['time'] = time ( true ) - $_SESSION ['time'];
if ($_SESSION ['ok'] != true || ! isset ( $_SESSION ['r'] )) {
	echo "<meta http-equiv=refresh content=0;URL='./problem.php'>\n";
}
unset ( $_SESSION ['r'] );
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
<body bgcolor="#ffffff" onContextmenu="return false">
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<h1>Congratulations!!</h1>
			</div>
			<form method="POST" action="./add.php">
				<input type="text" name="name" maxlength="15" placeholder="Name"><br>
				<button class="btn btn-primary" type="submit">登録</button>
			</form>
<?php //print_r((($_SESSION['count']-1)*30).",".$_SESSION['time']);?>
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