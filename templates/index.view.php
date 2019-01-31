<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ToDo App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav>
        <ul class="nav_ul">
            <li><a href="index.php">&#8227; Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <header>
        <div class="header">  
            <h1>ToDo simple app</h1>
        </div>
    </header>
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
    <footer>
        <div class="footer">

        </div>
    </footer>
</body>
</html>