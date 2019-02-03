<?php
require 'includes/header.view.php';
?>
<main>
      <div class="content">
        <h2>List of tasks:</h2>
        <ol>
            <?php 
                $counterToDo = 0;
                $counterCompleted = 0;
            ?>
            <?php foreach ($tasks as $task) : ?>
                <?php if($task->completed) : ?>
                    <?php $counterCompleted++; ?>
                    <del>
                        <li class="task"><span><?= $task->description ?></span></li>
                    </del>
                <?php else : ?>
                    <?php $counterToDo++; ?>
                    <li class="task"><span><?= $task->description ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="message">
                <?php if ($counterCompleted>=$counterToDo) : ?>
                    <span>Great work, tasks done: <strong><?= $counterCompleted ?></strong> ! </span>
                <?php else : ?>
                    <span>Try better, tasks done: only <strong><?= $counterCompleted ?></strong> !</span>
                <?php endif; ?>
            </div>  
        </ol>
      </div>
    </main>
<?php
require 'includes/footer.view.php';
?>
