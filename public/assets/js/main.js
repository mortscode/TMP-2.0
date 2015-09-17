$(document).ready(function() {

  var navpoint = $('.site-header').waypoint(function(direction) {
    var navHeight = $('.site-header').outerHeight();

    if(direction === 'down'){
      console.log("down");
      $('.site-header').addClass('is-fixed');
      $('#content').css('marginTop', navHeight);
    } else if(direction === 'up'){
      console.log("up");
      $('.site-header').removeClass('is-fixed');
      $('#content').css('marginTop', 0);
    }
  }, {
    offset: 0
  });

});