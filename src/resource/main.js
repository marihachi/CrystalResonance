var baseUrl = "http://marihachi.php.xdomain.jp/crystal-resonance";
$(() => {
	// ログイン処理
	$('#login-form').submit((e) => {
		e.preventDefault();
		$.ajax("${baseUrl}/api/account/login", {
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
		}).done(() => {
			location.reload();
		}).fail(() => {
			$('#log-message').text("ログインに失敗しました");
		});
	});

	// ログアウト処理
	$('#logout-form').submit((e) => {
		e.preventDefault();
		$.ajax("${baseUrl}/api/account/logout", {
			type: 'get',
			dataType: 'json',
		}).done(() => {
			location.reload();
		}).fail(() => {
			$('#log-message').text("ログアウトに失敗しました");
		});
	});
});