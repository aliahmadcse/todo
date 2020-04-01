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
    let searchStr = $(this)
      .val()
      .toLowerCase();
    $("#signin-task-container .task-row label").each(function() {
      let labelStr = $(this)
        .text()
        .toLowerCase();
      $(this)
        .closest(".task-row")
        [labelStr.indexOf(searchStr) !== -1 ? "show" : "hide"]();
    });
  });
  // end of document ready function
});
