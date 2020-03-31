<?php include_once('../private/initialize.php'); ?>

<?php $page_title = "Completed"; ?>

<?php include_once(SHARED_PATH . '/public_header.php'); ?>


<div class="page-wrapper">

    <?php include_once(SHARED_PATH . '/searchbar.php'); ?>

    <!-- --------------task card for signin user-------------- -->
    <?php
    $user_id = $session->get_user_id();
    $task = new Task([]);
    $obj_arr = $task->find_completed_by_user_id($user_id);
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
                                    <!-- <input type="checkbox"> -->
                                    <!-- <span class="checkmark m-1 mark-complete" id="complete-<?php echo h($obj->get_task_id()); ?>"></span> -->
                                </label>
                            </div>
                            <div class="card-icon-delete">
                                <i class="mr-4 far fa-trash-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <!-- ---------task card for sign in user------------ -->

</div>

<?php include_once(SHARED_PATH . '/public_footer.php'); ?>