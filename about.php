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
<body bgcolor="#ffffff" onContextmenu="return false"
	onload="setInterval('checkWindow()',3000)">
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<h1>About</h1>
			</div>
			<h3>Introduction</h3>
			<p>RGB式カラーコードを当てるシンプルなゲームです。<br>Version1.13、 2014/10/5</p>
			<br>
			<h3>Purpose</h3>
			<p>
				色彩センス，絶対色感を身に付ける。 <a href="http://abpro.jp/2014/">ABPro2014</a> での発表作品です。 [<a href="http://miyashita.com/2014/09/20140920-abpro2014.html">当日の全発表レポート</a>]<br>
				[<a href="http://www.slideshare.net/lanevok/rgb-color-strike-game-abpro2014">発表スライド</a>]，
				[<a href="http://togetter.com/li/721606">発表関連ツイートまとめ</a>]</p>
			<p>	『デイリーポータル Z：@nifty』 の 『<a href="http://portal.nifty.com/kiji/140924165234_3.htm">プログラムで笑わせろ！「普通じゃないプログラム」発表会</a>』 で，<br>
				発表が取り上げられ，紹介されました．</p>
				<br>
			<h3>Problem</h3>
			<p>
				Problemから問題が開けます。問題として提示された色について、「R, G, B」それぞれ16進数表記2桁で入力し、<br>提出ボタンで正解かどうか確かめることができます。
			</p>
			<p>
				不正解であれば、「R, G, B」それぞれ正解との差を10進数で計算し，その和をヒント(ズレ)として提示されます。<br>
				また、入力された「R, G, B」がどのような色かも提示されます。<br> 正解であれば、名前を入力することで、順位表に反映されます。
			</p>
			<p>変更ボタンで、新しい問題を提示します。</p>
			<br>
			<h3>Standings</h3>
			<p>
				Standingsで順位表を確認することができます。 <br>順位は、以下について合計値の小ささで決まります。
			</p>
			<ul>
				<li>最後に提出してから正解を提出するまでの秒数</li>
				<li>ペナルティとして、不正解の提出回数×30秒</li>
			</ul>
			<p>同じ名前が入力された場合は、以前より記録が良い場合のみ反映されます。<br>名前登録は、基本的にアルファベットと数字のみの対応です。</p>
			<br>
			<h3>Attention</h3>
			<p>
				環境によっては、問題画面で色画像が消えるバグが発生する場合があります。<br>ブラウザを変えて試してみてください。</p>
			<p>ソースコードは、[<a href="https://github.com/lanevok/RGB-Strike">こちら</a>]です。</p>
			<br>
			<h3>Contact</h3>
			<p>
				Author: lanevok [<a href="http://twitter.com/lanevok/">Twitter</a>]，[<a href="http://lanevok.com/">Web</a>]
			</p>
			<br>
			<br> <br>
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