<?php
require 'includes/header.view.php';
?>
<main>
    <div class="content">
        <h1>Add new task</h1>
        <form id="add-new-task" action="/laravel/index.php/new" method="POST">
            <hr>
            <label for="description">Description:</label><br>
            <textarea type="text" name="description" id="descrition" rows="5" cols="40"></textarea><br><hr>

            <label for="date">When task should be done?</label><br>
            <input type="date" name="date" id="date" value="<?=$date?>"><br><hr>

            <label for="task_done">Mark as done?</label>
            <input type="checkbox" name="task_done" id="task_done" value="1"><br><hr>

            <button type="submit" name="submit">Send form</button>
            <button type="reset" name="reset">Reset form</button>
            <hr>           
        </form>         
    </div>  
</main>
<?php
require 'includes/footer.view.php';
?>

