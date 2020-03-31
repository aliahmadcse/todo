<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Todo - <?php echo $page_title ?? ''; ?></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo url_for('/vendor/bootstrap/bootstrap.min.css'); ?>">
    <!-- font awesome css -->
    <link rel="stylesheet" href="<?php echo url_for('/vendor/fontawesome/css/all.min.css'); ?>">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/public.css') ?>">


</head>

<body>
    <?php $is_signed_in = $session->is_signed_in(); ?>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <a href="<?php echo url_for('/index.php'); ?>">
                <div class="sidebar-heading"> Todo</div>
            </a>
            <div class="list-group list-group-flush">
                <a href="<?php echo url_for('/index.php'); ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sun"></i>&nbsp;My Day</a>
                <?php if ($is_signed_in) : ?>
                    <a href="<?php echo url_for('/important.php'); ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-star"></i>&nbsp;Important</a>
                    <a href="<?php echo url_for('/completed.php'); ?>" class="list-group-item list-group-item-action bg-light"><i class="far fa-list-alt"></i>&nbsp;Completed</a>
                <?php endif; ?>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <i id="menu-toggle" class="fas fa-sliders-h"></i>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <?php if ($is_signed_in) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $session->get_username(); ?>
                                </a>
                                <div class="bg-light dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo url_for('auth/signout.php'); ?>">Sign Out</a>
                                </div>
                            </li>
                        <?php else :  ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url_for('auth/signin.php'); ?>">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url_for('auth/signup.php'); ?>">Sign Up</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <?php if ($session->isset_message()) : ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-11 mx-auto">
                            <div class="alert alert-success alert-dismissible fade show mt-5 w-40 text-center" role="alert">
                                <?php echo $session->get_message(); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $session->unset_message(); ?>
            </div>
        </div>
    </div>