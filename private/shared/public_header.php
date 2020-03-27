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
    <?php $is_login = true; ?>

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
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
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
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Simple Sidebar</h1>
                <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
            </div>
        </div>
    </div>