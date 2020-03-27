<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "Home"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>


<div class="page-wrapper">
    <div class="row">
        <div class="col-12 text-center mt-1">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include_once(SHARED_PATH . '/public_footer.php'); ?>