$(document).ready(function(){ 	
    var altura = $('.header').offset().top; 	 	
    $(window).on('scroll', function(){ 		
        if ( $(window).scrollTop() > altura ){ 			
            $('.header').addClass('menu-fixed'); 		
            $('.header').addClass('menu-fixed'); 		
        } else { 			
            $('.header').removeClass('menu-fixed'); 		
        } 	
    });  
});