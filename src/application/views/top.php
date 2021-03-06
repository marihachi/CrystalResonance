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
				<h1>Home</h1>
				<?php if (!$login) {
				?><p>ようこそ、ゲストさん。</p>
				<p><a href=signup>サインアップ</a>もしくはログインしてください。</p>
				<h2>ログイン</h2>
				<form id=login-form>
					<ul>
						<li><input type=text name=screen_name id=screen-name-box placeholder="ユーザーID" /></li>
						<li><input type=password name=password id=password-box placeholder="パスワード" /></li>
					</ul>
					<input type=submit value="ログイン" />
					<label id=log-message></label>
				</form>
				<?php }else{
				?><p>ようこそ、<?= $me['name']?>さん。</p>
				<form id=logout-form>
					<input type=submit value="ログアウト" />
					<label id=log-message></label>
				</form>
				<?php }
			?></main>
			<article id=new-score class=box>
				<p>There is no content.</p>
			</article>
			<footer class=box>
				<small>(c)2015 CrystalResonance.</small>
			</footer>
		</div>
	</body>
</html>