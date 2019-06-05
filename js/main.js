$(document).ready(function(){
		//setViewportMinHeight();
	//	setCorporateDivHeight();
		//setMenuCollapse();
		//animateMenuIcon();
		$('.nav a').on('click', function(){
  //  $('.btn-navbar').click(); //bootstrap 2.x
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
});
	});
	
/* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbar-collapsible',
  offset: 60
});

/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 60
        }, 1000);
        return false;
      }
    }
});

$('.hover-icon').hover(function(){
    $(this).find('img').stop().fadeTo('fast',0);
}, 
function(){
    $(this).find('img').stop().fadeTo('fast',1);
});

