<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=jp>
	<head>
		<meta charset=UTF-8 />
		<meta http-equiv=X-UA-Compatible content="IE=edge" />
		<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name=apple-mobile-web-app-capable content=yes />
		<title>サインアップ - CrystalResonance</title>
		<meta name=description content="ブラウザでプレイできる音楽ゲーム" />
		<!-- jQuery -->
		<script src=//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>

		<script src=resource/main.js></script>
		<link href=resource/base.css rel=stylesheet type=text/css />
		<link href=resource/main.css rel=stylesheet type=text/css />
	</head>
	<body>
		<div class=container style=width:970px>
			<main>
				<form id=signup-form>
					<label for="screen-name-box">ユーザーID</label>
					<input type=text name=screen_name id=screen-name-box />
					<label for="password-box">パスワード</label>
					<input type=password name=password id=password-box />
					<input type=submit value="サインアップ" />
				</form>
			</main>
			<footer>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>