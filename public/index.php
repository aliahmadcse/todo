<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "Home"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>


<div class="page-wrapper">
    <!-- search bar -->
    <div class="row">
        <div class="col-12 text-center mt-1">
            <div class="search">
                <input type="text" class="search-term" placeholder="Type to Search...">
                <button type="submit" class="search-button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="top-wrapper"></div>

    <!-- --------------task card-------------- -->
    <?php
    $user_id = $session->get_user_id();
    $task = new Task([]);
    $obj_arr = $task->find_by_user_id($user_id);
    ?>

    <?php foreach ($obj_arr as $obj) : ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-2">
                    <div class="task-description">
                        <label class="container ml-5"><?php echo h($obj->get_task_detail()); ?>
                            <?php if ($session->is_signed_in()) : ?>
                                <input type="checkbox">
                                <span class="checkmark m-1"></span>
                            <?php endif; ?>
                        </label>
                    </div>
                    <div class="card-icon">
                        <?php if ($session->is_signed_in()) : ?>
                            <i class="mr-4 far fa-star"></i>
                            <!-- <i class="mr-4 fas fa-star"></i> -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- ---------task card end------------ -->

    <!-- ---------- task input ------------ -->
    <div class="row">
        <div class="col-12">
            <div class="task-input">
                <input type="text" class="add-task" placeholder="Add task">
            </div>
        </div>
    </div>
    <!-- ---------- task input end ------------ -->

</div>

<?php include_once(SHARED_PATH . '/public_footer.php'); ?>