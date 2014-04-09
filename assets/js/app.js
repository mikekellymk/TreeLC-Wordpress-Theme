jQuery(document).ready(function($) {
	$(document).foundation();

	// Hack to get off-canvas .menu-icon to fire on iOS
    $('.menu-icon').click(function(){ 
    	false 
    });
    
});