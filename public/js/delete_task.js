$(document).ready(function() {
  //will trigger on checkbox click event
  $(".card-icon-delete").click(function(e) {
    bootbox.confirm({
      title: "Confirm",
      message: "Do you want to delete the task? This cannot be undone.",
      buttons: {
        cancel: {
          label: '<i class="fa fa-times"></i> Cancel'
        },
        confirm: {
          label: '<i class="fa fa-check"></i> Confirm'
        }
      },
      callback: function(result) {
        if (result) {
          const idStr = e.target.id;
          const id = idStr.match(/\d+/)[0];
          sendRequest(id);
          const parentEle = $(`#${idStr}`).closest(".task-row");
          parentEle.remove();
        }
      }
    });
  });

  const sendRequest = id => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/delete_task.php");
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
