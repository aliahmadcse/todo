<!-- jquery -->
<script src="<?php echo url_for('/vendor/jquery/jquery-3.4.1.min.js'); ?>"></script>

<!-- bootstrap js -->
<script src="<?php echo url_for('/vendor/bootstrap/bootstrap.min.js'); ?>"></script>

<!-- custom js -->
<script src="<?php echo url_for('/js/main.js') ?>"></script>
<script src="<?php echo url_for('/js/signup_validate.js') ?>"></script>
<script src="<?php echo url_for('/js/signin_validate.js') ?>"></script>

</body>

</html>

<?php db_disconnect($database); ?>