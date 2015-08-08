var baseUrl = "http://marihachi.php.xdomain.jp/crystal-resonance";
$(function() {
	// ログイン処理
	$('#login-form').submit(function(e) {
		e.preventDefault();
		$.ajax(baseUrl + "/api/account/login", {
			type: 'post',
			data: $('#login-form').serialize(),
			dataType: 'json',
		}).done(function() {
			location.reload();
		}).fail(function() {
			$('#log-message').text("ログインに失敗しました");
		});
	});

	// ログアウト処理
	$('#logout-form').submit(function(e) {
		e.preventDefault();
		$.ajax(baseUrl + "/api/account/logout", {
			type: 'get',
			dataType: 'json',
		}).done(function() {
			location.reload();
		}).fail(function() {
			$('#log-message').text("ログアウトに失敗しました");
		});
	});
	
	$('#signup-form').submit(function(e) {
		e.preventDefault();
		$.ajax(baseUrl + "/api/account/create", {
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
		}).done(function() {
			location.href = "../";
		}).fail(function() {
			$('#log-message').text("サインアップに失敗しました");
		});
	});
});