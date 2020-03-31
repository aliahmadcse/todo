$(document).ready(function() {
  //will trigger on checkbox click event
  $(".card-icon").click(function(e) {
    const idStr = e.target.id;
    const id = idStr.match(/\d+/)[0];
    sendRequest(id);
    const parentEle = $(`#${idStr}`).closest(".task-row");
    parentEle.remove();
  });

  const sendRequest = id => {
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

  //   end of jqdocready event
});
