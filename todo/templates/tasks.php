<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<h1>Jobs to do</h1>
<ul>
    <?php
    foreach ($tasks as $task) {

        $thisTask = $task->getTask();

        $completed = $task->getCompleted() ? 'Completed' : 'Incomplete';

        echo '<li>' . $thisTask . ' - ' . $completed . '</li>';
    }
    ?>
</ul>
</body>
</html>
