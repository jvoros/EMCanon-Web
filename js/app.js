$(document).ready(function(){
  
  function menuToggle() {
    $('#wrap').toggleClass('active');
    $('#header').toggleClass('active');
  }
  
  $('#menu-toggle, #menu a').on('click', function(){
      menuToggle();
  });

  // http://css-tricks.com/snippets/jquery/smooth-scrolling/ 
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-60
        }, 500);
        return false;
      }
    }
  });
    
});

