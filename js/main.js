//Various Onload Scripts
window.onload = function scriptsInit(){
  copyright();
  carouselInit();
  popInit();
  dropInit();
  parsleyInit();
};

//Set Footer Year
function copyright() {
  var d = new Date();
  var y = d.getFullYear();

  document.getElementById('copyright').innerHTML = "<p><span class='small'>The AWRA AL Section website was created by <a href='mailto:gmarodis@alruralwater.com'>George Marodis</a>, Source Water Specialist with the <a target='_blank' href='http://www.alruralwater.com'>Alabama Rural Water Association.</a></span><br />Copyright &copy; 1987 - " + y + " AWRA AL Section, All Rights Reserved.</p>";
  
  }

//Activate Carousel
function carouselInit() {
  $('.carousel').carousel({
    interval: 4000 //changes the speed
  })
}

//Activate Popovers
function popInit () {
  $("#symposium :link").popover();
}

//Navigation Dropdown Fade-In / Fade-Out on Hover
function dropInit() {
  $('ul.nav li.dropdown').hover(function(){
    $('.dropdown-menu', this).fadeIn();
  }, function(){
    $('.dropdown-menu', this).fadeOut('fast');
  });
}

//Parsley Contact Form Validation
function parsleyInit() {
  $('#contactUs').parsley();
}
