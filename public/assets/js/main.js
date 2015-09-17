$(document).ready(function() {

  var navHeight = $('.site-header').outerHeight();

  var navpoint = $('.site-header').waypoint(function(direction) {

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