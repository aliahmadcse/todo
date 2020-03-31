$(document).ready(function() {
  // const postURL = "todo/public/ajax/add_task.php";
  // sending request on ender key press event
  $(".add-task").keypress(function(e) {
    const task = $(".add-task").val();
    if (e.keyCode == 13 && task.length > 0) {
      sendRequest(task);
    }
  });

  const sendRequest = task => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/add_task.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        let result = xhr.responseText;
        if (result) {
          $("#signin-task-container").prepend(taskStr(task));
          $(".add-task").val("");
        }
      }
    };
    xhr.send("task=" + task);
  };

  const taskStr = task => {
    const str = `
    <div class="row">
      <div class="col-12">
        <div class="card mb-2">
          <div class="task-description">
            <label class="container ml-5">${task}
              <input type="checkbox">
              <span class="checkmark m-1"></span>
            </label>
          </div>
          <div class="card-icon">
            <i class="mr-4 far fa-star"></i>
          </div>
        </div>
      </div>
    </div>`;

    return str;
  };
  //
}); //end of jq doc ready event
