$(document).ready(function() {
  // const postURL = "todo/public/ajax/add_task.php";
  // sending request on ender key press event
  $(".add-task").keypress(function(e) {
    if (e.keyCode == 13) {
      sendRequest();
    }
  });

  const sendRequest = () => {
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
    xhr.send("id=" + "1");
  };
  //
}); //end of jq doc ready event
