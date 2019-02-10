<?php
require 'includes/header.view.php';
?>
<main>
    <div class="content">
        <h1>Add new user</h1>
        <form id="add-new-task" action="/laravel/index.php/add/user" method="POST">
            <hr>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name"><br><hr>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br><hr>

            <button type="submit" name="submit">Send form</button>
            <button type="reset" name="reset">Reset form</button>
            <hr>           
        </form>         
    </div>  
</main>
<?php
require 'includes/footer.view.php';
?>

