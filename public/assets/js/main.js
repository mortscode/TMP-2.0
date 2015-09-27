$(document).ready(function() {

  var sticky = new Waypoint.Sticky({
    element: $('.js-sticky')[0]
  });

  $('.js-avoid-orphan').toArray().forEach(avoidOrphan);

  // Fire callback at beginning of detection period
  $(window).resize(
    debounce(function() {
      changeStickyHeight();
    }, 250)
  );

  $('.nav-btn').on('click', function(){
    $('.lines').toggleClass('close');
    $('.m-nav-menu').toggleClass('is-open');
    $('html body').toggleClass('no-scroll');
  });
});


function avoidOrphan(elem) {
  var last = elem.lastChild;
  var windowWidth = window.innerWidth;
  var trimmed;
  var wordArray;
  var wordCount;

  // On mobile, do not apply ophan rule to paragraph tags. It looks funny.
  if (windowWidth < 640 && elem.nodeName === 'P') {
    return;
  }

  if (last && (last.nodeType == 3)) {
    trimmed = last.nodeValue.trim();
    wordArray = trimmed.match(/\S+/g);
    wordCount = wordArray ? wordArray.length : 0;

    if (wordCount > 3) {
      last.nodeValue = trimmed.replace(/\s+([^\s]+\s*)$/g, '\xA0$1');
    }
  }
}

var changeStickyHeight = function() {
  var navHeight = $('.site-header').outerHeight();
  $('.sticky-wrapper').css({ height: navHeight });
};
