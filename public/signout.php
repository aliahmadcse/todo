<?php include_once('../private/initialize.php');

if ($session->is_signed_in()) {
    $session->signout();
    redirect_to(url_for('index.php'));
}
