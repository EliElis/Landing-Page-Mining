
jQuery(function($){
	       $(".phone").mask("+7(999) 999-9999");
	        });

	       $(document).ready(function () {
	       $('input,textarea').focus(function(){
	        $(this).data('placeholder',$(this).attr('placeholder'))
	        $(this).attr('placeholder','');
	       });
	       $('input,textarea').blur(function(){
	        $(this).attr('placeholder',$(this).data('placeholder'));
	       });
	       });
			
jQuery(document).ready(function() {
  jQuery("a.scrollto").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
  });
});
