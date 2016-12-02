$(window).scroll(function(event){

// .site-header == whole thing
//    .site-branding == title & search
//    .site-navigation == menu bar; not always there.
// with menubar: I want site-header's top to be (negative)site-branding height
// with rightHandNav: I want the .site-header's top to be (negative)search height


  var currentDistanceToTop = $(this).scrollTop();
  var headerOffsetToTop = $(".site-header").offset().top;
  var headerHeight = $(".site-branding").height();
  var ISmobileOn = $(".site-header").hasClass("mobileOn");


    if(currentDistanceToTop > (headerHeight) ) {
      $(".main-navigation").addClass("fixedNav");
    } else {
      $(".main-navigation").removeClass("fixedNav");
    }

});
