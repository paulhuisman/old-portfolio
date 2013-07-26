Cufon.replace('.dinot-font', {
    hover: true,
    fontFamily: 'DINOT-Regular'
});
Cufon.replace('.whitney-font', { fontFamily: 'Whitney Semibold' });
Cufon.replace('.whatup-quote', { fontFamily: 'Whitney Semibold' });
Cufon.replace('.home-link', { fontFamily: 'Whitney Semibold' });
Cufon.replace('h3', { fontFamily: 'Whitney Semibold' });

$(document).ready(function() {

	$('.introtext').css('opacity','0.8');
	$('.web-intro').css('opacity','0.8');
	$('.px-intro').css('opacity','0.8');
	
	$('.recentwork-item').hover( 
		function () {
			$(this).find('.item-layover').css('background','transparent url(images/magni.png) no-repeat center center');
			$(this).find('.item-image').css('opacity','0.8');
		},
		function () {
			$(this).find('.item-layover').css('background','none');
			$(this).find('.item-image').css('opacity','1');
		}
	);
	
	$('.web-image').hover( 
		function () {
			$(this).find('.web-item-layover').css('background','transparent url(images/magni.png) no-repeat center center');
			$(this).find('.item-image').css('opacity','0.9');
		},
		function () {
			$(this).find('.web-item-layover').css('background','none');
			$(this).find('.item-image').css('opacity','1');	
		}
	);
		
	
	// Dropdown example for topbar nav
	// ===============================

	$("body").bind("click", function (e) {
		$('a.menu').parent("li").removeClass("open");
	});

	$("a.menu").click(function (e) {
		var $li = $(this).parent("li").toggleClass('open');
		return false;
	});
	  
	  // colorbox
	  // ===============================
	  
	jQuery("a.lightbox").colorbox({
		  transition: 'fade',
		  rel: 'group1',
		  maxHeight: '92%'
	});
	$("a.flickrphoto").colorbox({maxHeight: '92%'});
	$("a[rel='group1']").colorbox({
		rel:'group1'
	});  
	// photo filters + hover effect
	$("#photographs .black").css('opacity','0.2');
	
	$("#photographs a").hover(function () {
		$(this).find('.black').css('display','block');
	},
	function() {
		$(this).find('.black').css('display','none');
	});
	
	$("#photographs a").hoverIntent(function () {
		$(this).append('<div class="caption">' + $(this).attr('alt') + '</div>');
		
	},
	function() {
		$('.caption', this).remove();
	});
	
	$("#photographs .caption").hover(function () {
		$('.caption', this).remove();
	});
	
	$("#filter a").click(function () {
		 $("#filter a").removeClass();
		 var cat =  $(this).attr('ref');

		 if (cat == 'all') {
			$("#photographs img").fadeTo('slow', '1');
		 } else {
			$("#photographs a." + cat + "' img").fadeTo('slow', '1');
			$("#photographs a:not('." + cat + "') img").fadeTo('slow', '0.1');
		 }
		 $(this).addClass('active');
	});
	
	if ($('body').hasClass('flickr-page')) {
		$('html').addClass('flickr-page');
	}
	
	// Mail
	// ===============================
	$('a#email_me').click(function(){
		document.location = 'mailto:paulhuisman88@gmail.com';
		return false;
	})	
	
	$('#main_carousel').cycle({
		fx:'scrollHorz',
		easing: 'easeInOutExpo',
	    speed:  '800', 
	    pause				: true,
		timeout				: 8000, 
	    next:   '#next_s', 
	    prev:   '#prev_s',
	    pager: '#c_nav',
	});

	$('.recentwork-item .item-image').each(function(){
		$(this).hover(function(){
			// work work
		})
	})
	  
});


function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}
