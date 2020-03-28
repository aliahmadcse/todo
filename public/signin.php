<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "Sign Up"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>


<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-11 mx-auto mt-5">
            <i class="fas fa-user-circle user-icon"></i>
            <form action="<?php echo url_for('/signin.php'); ?>" method="POST">
                <div class="form-group">
                    <small class="text-danger form-text mb-2"></small>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <small class="text-danger form-text mb-2"></small>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-submit-form">Sign In</button>
            </form>
        </div>
    </div>
</div>


<?php include_once(SHARED_PATH . '/public_footer.php'); ?>