$(document).ready(function() {
  // const postURL = "todo/public/ajax/add_task.php";
  // sending request on ender key press event
  $(".add-task").keypress(function(e) {
    if (e.keyCode == 13) {
      const task = $(".add-task").val();
      sendRequest(task);
      $(".add-task").val("");
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
        console.log(result);
      }
    };
    xhr.send("task=" + task);
  };
  //
}); //end of jq doc ready event
