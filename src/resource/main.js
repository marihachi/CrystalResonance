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

	// サインアップ処理
	$('#signup-form').submit(function(e) {
		e.preventDefault();
		$.ajax(baseUrl + "/api/account/create", {
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
		}).done(function() {
			location.href = baseUrl;
		}).fail(function() {
			$('#log-message').text("サインアップに失敗しました");
		});
	});

	// メインメニューのタブをクリック
	$('.main-menu-tab').click(function() {
		var targetContent = $(this).parent().children('.main-menu-content');
		if (targetContent.length === 0)
		{
			$(this).parent().parent().find('.main-menu-content').hide(200);
			$(this).parent().parent().find('.main-menu-content').parent().css('z-index', 0);
		}
		else
		{
			if(targetContent.is(':hidden'))
			{
				var elseContent = $(this).parent().parent().find('.main-menu-content').not(targetContent);
				var elseItem = elseContent.parent();
				elseItem.css('z-index', 0);
				$(this).parent().css('z-index', 1);
				elseContent.hide(200);
				targetContent.show(300);
			}
			else
			{
				targetContent.hide(200);
				$(this).parent().css('z-index', 0);
			}
		}
	});
});