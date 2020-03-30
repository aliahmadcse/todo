<?php include_once('../../private/initialize.php'); ?>

<?php
if (!is_ajax_request()) {
    redirect_to(url_for('/index.php'));
}

echo $_POST['id'];
