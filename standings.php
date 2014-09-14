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
<body onContextmenu="return false">
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<h1>Standings</h1>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Name</th>
						<th>Time</th>
					</tr>
				</thead>
				<tbody>
<?php
function getStandings() {
	$array = parse_ini_file ( 'standings.ini' );
	return $array;
}
$src = getStandings ();
asort ( $src, SORT_NUMERIC );
$i = 0;
foreach ( $src as $key => $value ) {
	print_r ( "<tr><td>" );
	print_r ( ++ $i );
	print_r ( "</td><td>" );
	print_r ( $key );
	print_r ( "</td><td>" );
	print_r ( $value );
	print_r ( "</td></tr>" );
}
?>
</tbody>
			</table>
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