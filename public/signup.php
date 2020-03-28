<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "Sign Up"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>

<?php
if (is_post_request()) {
    $args = $_POST['user'];
    $user = new User($args);
    $result = $user->create();
    if (!$result) {
        //display errors returned in user->errors['username']
    } else {
        $session->set_message('Sign Up success! Sign In to continue');
        redirect_to(url_for('/signin.php'));
    }
} else {
    $user = new User([]);
}
?>


<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-11 mx-auto mt-5">
            <i class="fas fa-user-circle user-icon"></i>
            <form action="<?php echo url_for('/signup.php'); ?>" method="POST">
                <div class="form-group">
                    <small class="text-danger form-text mb-2" id="email-error"><?php echo $user->errors['username'] ?? ''; ?></small>
                    <input type="email" value="<?php echo $user->get_email(); ?>" name="user[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <small class="text-danger form-text mb-2" id="username-error"></small>
                    <input type="text" value="<?php echo $user->get_username(); ?>" name="user[username]" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <small class="text-danger form-text mb-2" id="password-error"></small>
                    <input type="password" value="<?php echo $user->get_password(); ?>" name="user[password]" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-submit-form btn-sign-up">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?php include_once(SHARED_PATH . '/public_footer.php'); ?>