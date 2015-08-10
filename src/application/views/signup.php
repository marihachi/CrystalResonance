<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang=ja>
	<head>
		<meta charset=UTF-8 />
		<meta http-equiv=X-UA-Compatible content="IE=edge" />
		<meta name=viewport content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name=apple-mobile-web-app-capable content=yes />
		<title>サインアップ - CrystalResonance</title>
		<meta name=description content="ブラウザでプレイできる音楽ゲーム" />
		<script src=//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
		<script src=resource/main.js></script>
		<link href=resource/main.css rel=stylesheet type=text/css />
	</head>
	<body>
		<div class=container id=main-container style=width:970px>
			<nav class=container id=main-menu>
				<div class="main-menu-logo"></div>
				<div class="main-menu-item main-menu-item-1">
					<div class=main-menu-tab id=main-menu-home>
						<a href=/crystal-resonance>ホームへ戻る</a>
					</div>
				</div>
				<div class="main-menu-item main-menu-item-2">
					<div class=main-menu-content id=main-menu-search>
						<div class=main-menu-content-inner>
							<form method=get action=search>
								<input type=text name=q />
								<input type=submit value="検索" />
							</form>
						</div>
					</div>
					<div class=main-menu-tab>
						譜面を探す
					</div>
				</div>
				<div class="main-menu-item main-menu-item-3">
					<div class=main-menu-content id=main-menu-score-content>
						<div class=main-menu-content-inner>
							<ul>
								<li>譜面を作る</li>
								<li>管理画面へ</li>
							</ul>
						</div>
					</div>
					<div class=main-menu-tab>
						譜面の管理
					</div>
				</div>
			</nav>
			<main class=box>
				<h1>新しいアカウントの情報を入力してください</h1>
				<form id=signup-form>
					<ul>
						<li><input type=text name=screen_name id=screen-name-box placeholder="ユーザーID" /></li>
						<li><input type=text name=name id=name-box placeholder="名前" /></li>
						<li><input type=password name=password id=password-box placeholder="パスワード" /></li>
					</ul>
					<input type=submit value="サインアップ" />
					<label id=log-message></label>
				</form>
			</main>
			<footer class=box>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>