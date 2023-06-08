//On Scroll Functionality
jQuery(function () {
	jQuery(window).scroll(() => {
		var windowTop = jQuery(window).scrollTop();
		windowTop > 10 ? jQuery('header#site-header').addClass('afterScroll') : jQuery('header#site-header').removeClass('afterScroll');
		windowTop > 10 ? jQuery('div.header-inner').addClass('afterScroll') : jQuery('div.header-inner').removeClass('afterScroll');
		windowTop > 10 ? jQuery('div.site-logo').addClass('afterScroll') : jQuery('div.site-logo').removeClass('afterScroll');
		// windowTop > 10 ? jQuery('.waves-nav').addClass('afterScroll') : jQuery('.waves-nav').removeClass('afterScroll');
		windowTop > 10 ? jQuery('header.entry-header').addClass('afterScroll') : jQuery('header.entry-header').removeClass('afterScroll');
	});
});