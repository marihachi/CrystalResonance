<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=ja>
	<head>
		<meta charset=UTF-8 />
		<meta http-equiv=X-UA-Compatible content="IE=edge" />
		<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name=apple-mobile-web-app-capable content=yes />
		<title>「<?= $search_text?>」の検索結果 - CrystalResonance</title>
		<meta name=description content="ブラウザでプレイできる音楽ゲーム" />
		<!-- jQuery -->
		<script src=//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>

		<script src=resource/main.js></script>
		<link href=resource/base.css rel=stylesheet type=text/css />
		<link href=resource/main.css rel=stylesheet type=text/css />
	</head>
	<body>
		<div class=container style=width:970px>
			<header>
				<div class=main-menu-label id=main-menu-home>
					Home
				</div>
				<div class=main-menu-label id=main-menu-search>
					Search
					<div class=main-menu-content>

					</div>
				</div>
			</header>
			<main>
				Search Result.
			</main>
			<footer>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>