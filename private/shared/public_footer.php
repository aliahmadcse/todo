<!-- jquery -->
<script src="<?php echo url_for('/vendor/jquery/jquery-3.4.1.min.js'); ?>"></script>

<!-- bootstrap js -->
<script src="<?php echo url_for('/vendor/bootstrap/bootstrap.min.js'); ?>"></script>

<!-- custom js -->
<script src="<?php echo url_for('/js/main.js') ?>"></script>
<script src="<?php echo url_for('/js/signup_validate.js') ?>"></script>
<script src="<?php echo url_for('/js/signin_validate.js') ?>"></script>
<?php if ($session->is_signed_in()) : ?>
    <script src="<?php echo url_for('/js/add_task_signin.js') ?>"></script>
    <script src="<?php echo url_for('/js/complete_task.js') ?>"></script>
    <script src="<?php echo url_for('/js/important_task.js') ?>"></script>
<?php endif; ?>

<?php if (!$session->is_signed_in()) : ?>
    <script src="<?php echo url_for('/js/add_task.js') ?>"></script>
<?php endif; ?>

</body>

</html>

<?php db_disconnect($database); ?>