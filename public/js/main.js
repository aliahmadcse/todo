$(document).ready(function() {
  // nav-bar
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  // Appending because it's the design demand
  const page_wrapper = $(".page-wrapper");
  $(".container-fluid").append(page_wrapper);

 
  // end of document ready function
});
