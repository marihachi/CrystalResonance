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
			<header id=main-menu>
				<div class="main-menu-item main-menu-item-1">
					<div class=main-menu-tab id=main-menu-home>
						<a href=/crystal-resonance>ホームへ戻る</a>
					</div>
				</div>
				<div class="main-menu-item main-menu-item-2">
					<div class=main-menu-content id=main-menu-search>
						<form method=get action=search>
							<input type=text name=q />
							<input type=submit value="検索" />
						</form>
					</div>
					<div class=main-menu-tab>
						譜面を探す
					</div>
				</div>
				<div class="main-menu-item main-menu-item-3">
					<div class=main-menu-content id=main-menu-score-content>
						<ul>
							<li>譜面を新規作成</li>
							<li>譜面の管理画面へ</li>
						</ul>
					</div>
					<div class=main-menu-tab>
						譜面管理
					</div>
				</div>
			</header>
			<main class=box>
				<form id=signup-form>
					<div class=input-group>
						<label for="screen-name-box">ユーザーID</label>
						<input type=text name=screen_name id=screen-name-box />
					</div>
					<div class=input-group>
						<label for="name-box">名前</label>
						<input type=text name=name id=name-box />
					</div>
					<div class=input-group>
						<label for="password-box">パスワード</label>
						<input type=password name=password id=password-box />
					</div>
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