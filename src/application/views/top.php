<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=jp>
	<head>
		<meta charset=UTF-8 />
		<meta http-equiv=X-UA-Compatible content="IE=edge" />
		<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name=apple-mobile-web-app-capable content=yes />
		<title>CrystalResonance</title>
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
				This is main menu.
			</header>
			<main>
				<?php if (!$login) {
				?><p>ようこそ、ゲストさん。ログインもしくはサインアップしてください。</p>
				<form id=login-form>
					<input type=text name=screen_name />
					<input type=password name=password />
					<input type=submit value="ログイン" />
				</form>
				<?php }else{
				?><p>ようこそ、<?= $me['name']?>さん。</p>
				<form id=logout-form>
					<input type=submit value="ログアウト" />
				</form>
				<?php }
			?></main>
			<article id=new-score>
				<p>contents none</p>
			</article>
			<footer>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>