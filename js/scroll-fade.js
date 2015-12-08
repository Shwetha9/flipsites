$(document).ready(function(){
	$(window).scroll(function(){
	    $(".header-content-inner").css("opacity", 1 - $(window).scrollTop() /500);
	  });
});

/*win.scroll(function(){
  scrollPosition = win.scrollTop();
  scrollRatio = 1 - scrollPosition / 300;
  $(".top").css("opacity", scrollRatio);
*/

