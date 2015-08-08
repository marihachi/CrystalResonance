<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=ja>
	<head>
		<meta charset=UTF-8 />
		<meta http-equiv=X-UA-Compatible content="IE=edge" />
		<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name=apple-mobile-web-app-capable content=yes />
		<title>CrystalResonance</title>
		<meta name=description content="ブラウザでプレイできる音楽ゲーム" />
		<!-- jQuery -->
		<script src=//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
		<!-- Bootstrap -->
		<link href=//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css rel=stylesheet />
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src=//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js></script>
		<!-- tmlib.js -->
		<script src=//cdn.rawgit.com/phi-jp/tmlib.js/0.3.0/build/tmlib.js></script>

		<script src=resource/main.js></script>
		<script src=resource/game.js></script>
		<link href=resource/main.css rel=stylesheet type=text/css />
	</head>
	<body>
		<main>
			<canvas id=game-main></canvas>
		</main>
		<div class=container style=width:970px>
			<footer>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>