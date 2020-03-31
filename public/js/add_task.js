$(document).ready(function() {
  // sending request on ender key press event
  $(".add-task").keypress(function(e) {
    const task = $(".add-task").val();
    if (e.keyCode == 13 && task.length > 0) {
      const taskStr = `
      <div class="row">
        <div class="col-12">
            <div class="card mb-2">
                <div class="task-description">
                    <label class="container ml-5">${task}</label>
                </div>
            </div>
        </div>
      </div>`;

      $("#guest-task-container").prepend(taskStr);
      $(".add-task").val("");
    }
  });

  //
}); //end of jq doc ready event
