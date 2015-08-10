var ua = (function(u) {
	var mobile = {
		0: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
			|| u.indexOf("iphone") != -1
			|| u.indexOf("ipod") != -1
			|| (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
			|| (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
			|| u.indexOf("blackberry") != -1,
		iPhone: (u.indexOf("iphone") != -1),
		Android: (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
	};
	var tablet = (u.indexOf("windows") != -1 && u.indexOf("touch") != -1)
		|| u.indexOf("ipad") != -1
		|| (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
		|| (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
		|| u.indexOf("kindle") != -1
		|| u.indexOf("silk") != -1
		|| u.indexOf("playbook") != -1;
	var pc = !mobile[0] && !tablet;
	return {
		Mobile: mobile,
		Tablet: tablet,
		PC: pc
	};
})(window.navigator.userAgent.toLowerCase());

var SCREEN_WIDTH = 1280;              // スクリーン幅
var SCREEN_HEIGHT = 720;              // スクリーン高さ
var SCREEN_CENTER_X = SCREEN_WIDTH/2;   // スクリーン幅の半分
var SCREEN_CENTER_Y = SCREEN_HEIGHT/2;  // スクリーン高さの半分

/*
var offset = $('#game-main').offset();
var game-main-pos-initial-x = offset.left;
var game-main-pos-initial-y = offset.top;
*/

tm.main(function() {
    var app = tm.display.CanvasApp("#game-main");
    app.background = "#000";
    app.resize(SCREEN_WIDTH, SCREEN_HEIGHT);
	app.fps = 60;
	
    if (!!ua.PC)
	{
		app.replaceScene(LoadingScene());
    }
	else
	{
		var label = tm.display.Label("PC端末からプレイしてください。").addChildTo(app.currentScene);
    	label.setPosition(SCREEN_CENTER_X, SCREEN_CENTER_Y);
    }
    app.run();
});

tm.define("LoadingScene", {
	superClass: "tm.app.Scene",

	init: function() {
		this.superInit();
		
	},

	update: function(app) {
		
	}
});

tm.define("MainScene", {
	superClass: "tm.app.Scene",

	init: function() {
		this.superInit();
		
	},

	update: function(app) {
		
	}
});