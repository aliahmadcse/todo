$(document).ready(function() {
  //will trigger on checkbox click event
  $(".mark-complete").click(function(e) {
    const id = e.target.id;
    const parentEle = $(`#${id}`).closest(".task-row");
    parentEle.remove();
  });
});
