$(document).ready(function() {
  // nav-bar
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  // Appending because it's the design demand
  const page_wrapper = $(".page-wrapper");
  $(".container-fluid").append(page_wrapper);

  // searching through dom
  $(".search-term").on("keyup", function() {
    var value = $(this)
      .val()
      .toLowerCase();
    $("$signin-task-container").append();
    $("#signin-task-container").filter(function() {
      $(this).toggle(
        $(this)
          .text()
          .toLowerCase()
          .indexOf(value) > -1
      );
    });
  });

  // end of document ready function
});
