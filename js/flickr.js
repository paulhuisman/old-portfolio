
Cufon.replace('.dinot-font', {
    hover: true,
    fontFamily: 'DINOT-Regular'
});

Cufon.replace('.whitney-font', { fontFamily: 'Whitney Semibold' });
Cufon.replace('.whatup-quote', { fontFamily: 'Whitney Semibold' });
Cufon.replace('.home-link', { fontFamily: 'Whitney Semibold' });
Cufon.replace('h3', { fontFamily: 'Whitney Semibold' });

$(document).ready(function() {
	
	// Dropdown example for topbar nav
	// ===============================

	$("body").bind("click", function (e) {
		$('a.menu').parent("li").removeClass("open");
	});

	$("a.menu").click(function (e) {
		var $li = $(this).parent("li").toggleClass('open');
		return false;
	});
	  
	// Colorbox
	// ===============================
	 $("a.larger").colorbox({maxHeight: '92%'});
	
	// Mail
	// ===============================
	$('a#email_me').click(function(){
		document.location = 'mailto:paulhuisman88@gmail.com';
		return false;
	})	
	
	dp.SyntaxHighlighter.HighlightAll('code');
	  
});
