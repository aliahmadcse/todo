<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "My Day"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>


<div class="page-wrapper">

    <?php include_once(SHARED_PATH . '/searchbar.php'); ?>

    <!-- --------------task card for signin user-------------- -->
    <?php
    // for guest user get_user_id will return an empty string
    // so $obj_arr will remain empty
    $user_id = $session->get_user_id();
    $task = new Task([]);
    $obj_arr = $task->find_by_user_id($user_id);
    ?>

    <?php if (empty($obj_arr)) : ?>
        <div id="signin-task-container"></div>
    <?php else : ?>
        <div id="signin-task-container">
            <?php foreach ($obj_arr as $obj) : ?>
                <div class="row task-row" id="row-<?php echo h($obj->get_task_id()); ?>">
                    <div class="col-12">
                        <div class="card mb-2">
                            <div class="task-description">
                                <label class="container ml-5"><?php echo h($obj->get_task_detail()); ?>
                                    <input type="checkbox">
                                    <span class="checkmark m-1 mark-complete" id="complete-<?php echo h($obj->get_task_id()); ?>"></span>
                                </label>
                            </div>
                            <div class="card-icon">
                                <i class="mr-4 far fa-star" id="imp-<?php echo h($obj->get_task_id()); ?>"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
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