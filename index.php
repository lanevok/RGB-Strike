<?php
session_start ();
unset ( $_SESSION ['r'] );
unset ( $_SESSION ['count'] );
session_destroy ();
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
				<h1>RGB Strike Game</h1>
			</div>
			<button class="btn btn-large btn-warning" type="button"
				onclick="location.href='./about.php'">About</button>
			<br>
			<br>
			<button class="btn btn-large btn-primary" type="button"
				onclick="location.href='./problem.php'">Problem</button>
			<br>
			<br>
			<button class="btn btn-large btn-success" type="button"
				onclick="location.href='./standings.php'">Standings</button>
		</div>
		<div id="push"></div>
	</div>
	<div id="footer">
		<div class="container">
			<p class="muted credit">RGB Strike Game</p>
		</div>
	</div>
</body>
</html>