const markComplete = sentId => {
  const idStr = sentId;
  console.log(idStr);
  // return;
  const id = idStr.match(/\d+/)[0];
  sendCompleteRequest(id);
  const parentEle = $(`#${idStr}`).closest(".task-row");
  parentEle.remove();
};

const sendCompleteRequest = id => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/complete_task.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let result = xhr.responseText;
      console.log(result);
    }
  };
  xhr.send("id=" + id);
};

const markImportant = sentId => {
  const idStr = sentId;
  const id = idStr.match(/\d+/)[0];
  sendImportantRequest(id);
  const parentEle = $(`#${idStr}`).closest(".task-row");
  parentEle.remove();
};

const sendImportantRequest = id => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/important_task.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let result = xhr.responseText;
      console.log(result);
    }
  };
  xhr.send("id=" + id);
};

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
        let insertId = xhr.responseText;
        if (insertId > 0) {
          $("#signin-task-container").prepend(taskStr(task, insertId));
          $(".add-task").val("");
        }
      }
    };
    xhr.send("task=" + task);
  };

  const taskStr = (task, insertId) => {
    const str = `
    <div class="row task-row" id="row-${insertId}">
      <div class="col-12">
        <div class="card mb-2">
          <div class="task-description">
            <label class="container ml-5">${task}
              <input type="checkbox">
                <span class="checkmark m-1 mark-complete" id="complete-${insertId}" onclick="markComplete(this.id)"></span>
            </label>
          </div>
          <div class="card-icon">
            <i class="mr-2 ml-4 far fa-star" id="imp-${insertId}" onclick="markImportant(this.id)"></i>
          </div>
        </div>
      </div>
    </div>`;

    return str.replace(/(\r\n|\n|\r)/gm, "");
  };
  //
}); //end of jq doc ready event
