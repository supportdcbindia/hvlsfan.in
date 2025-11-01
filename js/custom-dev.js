(function ($) {
	jQuery(document).ready(function ($) {
		
		$('body').bind('cut copy', function(e) {
          	e.preventDefault();
          	//alert('Sorry! This Text Cut Copy And Paste Not Working');
        });
        $(document).bind("contextmenu",function(e){
        	//alert('Sorry! This Page Right Click Not Working');
  			return false;

    	});
    	
        $(document).keydown(function(e){
	    	if(e.which === 123){
	       		return false;
	    	}
	    	if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
	    		//alert('Sorry! This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'K'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
			if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
				//alert('Sorry! '+e.keyCode+' This Key Not Working');
				return false;
			}
		});

		$("body").css("-webkit-user-select","none");
        $("body").css("-moz-user-select","none");
        $("body").css("-ms-user-select","none");
        $("body").css("-o-user-select","none");
        $("body").css("user-select","none");
        

		
        
	});
})(jQuery);