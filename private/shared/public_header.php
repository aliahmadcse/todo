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