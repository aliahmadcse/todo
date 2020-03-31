<?php include_once('../../private/initialize.php'); ?>

<?php
if (!is_ajax_request()) {
    redirect_to(url_for('/index.php'));
}


$task_id = $_POST['id'];

$result = Task::mark_important($task_id);

echo $result;
