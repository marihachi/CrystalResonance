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

tm.main(function() {
    var app = tm.display.CanvasApp("#game-main");
    app.background = "#000";
    app.resize(1280, 720);
	
    if (ua.PC === true)
	{

    }
	else
	{
		var label = tm.display.Label("PC端末からプレイしてください。").addChildTo(app.currentScene);
    	label.setPosition(1280/2, 720/2);
    }
    app.run();
});