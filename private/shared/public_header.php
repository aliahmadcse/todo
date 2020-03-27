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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo url_for('/index.php'); ?>">Todo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php if ($is_login) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Username</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign out</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign up</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>