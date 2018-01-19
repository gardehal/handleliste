<?php
//todo_id, todo_check, todo_todo
$todoischecked = $event['todo_check'];
?>

<div class="card-container">
    <form class="" action="update-todo.php?id=<?= $event['todo_id'] ?>" method="post">
        <input class="" type="checkbox" id="edit-todo-check" name="edit-todo-check"
        <?php 
        if($todoischecked == 1)
        { ?> 
            checked="checked" 
        <?php } ?>  onChange='submit();'  value="1">
        <input <?php 
        if($todoischecked == 1)
        { ?> 
            class="todo-done" 
        <?php } ?> type="text" id="edit-todo-todo" name="edit-todo-todo" onChange='submit();' value="<?= $event['todo_todo'] ?>">
        <a class="card-delete" href="delete-todo.php?id=<?= $event['todo_id'] ?>&value=<?= $event['todo_todo'] ?>">
            <button class="card-button" type="button">X</button>
        </a>
        <!--- ID: <?= $event['todo_id'] ?> --->
        <input type="hidden" name="edit-todo-id" value="<?= $event['todo_id'] ?>"> 
    </form>
</div>