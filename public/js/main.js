$(document).ready(function() {
  // nav-bar
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  const page_wrapper = $(".page-wrapper");
  $(".container-fluid").append(page_wrapper);

  
});
