$(document).scroll(function () {
  
    // parallaxing
    var $movebg = $(window).scrollTop() * -0.4;
    $('.portion').css('background-positionY', ($movebg) + 'px');
  
    // add class active to nav a on scroll
    var scrollPos = $(document).scrollTop() + 100;
    $('nav a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos) {
        $('nav a').removeClass("active");
        currLink.addClass("active");
      }
    });
    
    // changing padding of nav a on scroll
      if (scrollPos > 150) {
        $('nav a').addClass('small');
        $('nav span').removeClass('movetext');
      } else {
        $('nav a').removeClass('small');
        $('nav span').addClass('movetext');
      }
    
});