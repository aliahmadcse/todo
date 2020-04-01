const taskStr = (task, insertId) => {
  const str = `
    <div class="row task-row" id="row-`+`${insertId}">
      <div class="col-12">
        <div class="card mb-2">
          <div class="task-description">
            <label class="container ml-5">${task}
              <input type="checkbox">
                <span class="checkmark m-1 mark-complete" id="complete-${insertId}"></span>
            </label>
          </div>
          <div class="card-icon">
            <i class="mr-2 ml-4 far fa-star" id="imp-${insertId}"></i>
          </div>
        </div>
      </div>
    </div>`;

  return str.replace(/(\r\n|\n|\r)/gm,"");
};

console.log(taskStr("Dummy","1"));
