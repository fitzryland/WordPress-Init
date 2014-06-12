jQuery(document).ready(function() {
// Couple of variables used throughout code
  var $body = jQuery('body'),
    $win = jQuery(window);

// Check Width
  var timer,
    smallMediumBreak = 600, // change me!
    mediumLargeBreak = 832, // change me!
    layoutView,
    checkWidth = function() {
      windowWidth = $win.width();
      if ( windowWidth <= smallMediumBreak ) {
        layoutView = 'small';
      } else if ( windowWidth <= mediumLargeBreak ) {
        layoutView = 'medium';
      } else {
        layoutView = 'large';
      }
    };
  $win.resize(function() {
    clearTimeout(timer);
    // throttle the resize check
    timer = setTimeout(function() {
      // resize functions here
      checkWidth();
    }, 200);
  });
  checkWidth();
});