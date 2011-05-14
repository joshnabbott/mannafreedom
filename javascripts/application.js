$(document).ready(function() {
  // Slideshow
  setTimeout(function(){
    $('#slideshow').nivoSlider({
      effect:                   'fade',
      directionNav:             true,
      directionNavHide:         false,
      pauseTime:                5000,
      pauseOnHover:             true,
      controlNavThumbs:         false,
      slices:                   1
    });
  }, 2000);
})