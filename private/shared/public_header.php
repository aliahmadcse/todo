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
    <?php $is_login = false; ?>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <a href="<?php echo url_for('/index.php'); ?>">
                <div class="sidebar-heading"> Todo</div>
            </a>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sun"></i>&nbsp;My Day</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="far fa-star"></i>&nbsp;Important</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="far fa-list-alt"></i>&nbsp;Completed</a>
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
                        <?php if ($is_login) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sign Up</a>
                            </li>
                        <?php else :  ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Username
                                </a>
                                <div class="bg-light dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
            </div>
        </div>
    </div>