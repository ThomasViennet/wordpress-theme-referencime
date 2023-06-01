//On Scroll Functionality
jQuery(function () {
	jQuery(window).scroll(() => {
		var windowTop = jQuery(window).scrollTop();
		windowTop > 30 ? jQuery('header#site-header').addClass('afterScroll') : jQuery('header#site-header').removeClass('afterScroll');
		windowTop > 30 ? jQuery('div.header-inner').addClass('afterScroll') : jQuery('div.header-inner').removeClass('afterScroll');
		windowTop > 30 ? jQuery('div.site-logo').addClass('afterScroll') : jQuery('div.site-logo').removeClass('afterScroll');
	});
});