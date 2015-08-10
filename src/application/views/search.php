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
		<script src=//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
		<script src=resource/main.js></script>
		<link href=resource/main.css rel=stylesheet type=text/css />
	</head>
	<body>
		<header class=container>
			<nav id=main-menu>
				<ul class=main-menu-items>
					<li class="main-menu-logo"></li>
					<li class="main-menu-item main-menu-item-1">
						<div class=main-menu-tab id=main-menu-home>
							<a href=/crystal-resonance>ホームへ戻る</a>
						</div>
					</li>
					<li class="main-menu-item main-menu-item-2">
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
					</li>
					<li class="main-menu-item main-menu-item-3">
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
					</li>
				</ul>
			</nav>
		</header>
		<div class=container id=main-container>
			<main class=box>
				Search Result.
			</main>
			<footer class=box>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>