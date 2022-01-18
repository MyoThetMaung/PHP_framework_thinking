<?php require "partials/header.php"; ?>

    <h1>To Do List</h1>
    <ul>
        <?php
         foreach($tasks as $task){ 
            if($task['complete']==1){ ?>
                <li><?php echo $task['description']; ?></li>
        <?php  }else{  ?>
                <strike><li><?php echo $task['description']; ?></li></strike>
        <?php
            }
         }
         ?>
    </ul>

<?php require "partials/footer.php"; ?>
