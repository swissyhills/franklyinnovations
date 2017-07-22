$(document).ready(function(){
	var pageURL = window.location.href;
	$('#mainMenu .navbar-collapse .nav-link').each(function(){
		var navURL = $(this).attr('href');
		if(pageURL.indexOf(navURL) > -1){
			console.log('worked');
			$(this).parent().addClass('active');
			$(this).parent('li').siblings().removeClass('active');
		}
	});
});