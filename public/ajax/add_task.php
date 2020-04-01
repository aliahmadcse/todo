<?php include_once('../../private/initialize.php'); ?>

<?php
if (!is_ajax_request()) {
    redirect_to(url_for('/index.php'));
}

$args = [];

$args["user_id"] = $session->get_user_id();
$args["task_detail"] = $_POST["task"];
$args["is_completed"] = '0';
$args["is_important"] = '0';

$task = new Task($args);

$result = $task->create();

echo $task->get_task_id();
