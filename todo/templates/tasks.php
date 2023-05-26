<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<h1>Add new jobs to do:</h1>
<form action="/addtask" method="post">
    <label for="task">Task:</label>
    <input id="task" name="task" />
    <button>Submit</button>
</form>
<h2>Incomplete Tasks:</h2>
<ul>
    <?php
    foreach ($tasks as $task) {

        $thisTask = $task->getTask();

        $completed = $task->getCompleted() ? 'Completed' : 'Incomplete';

        echo '<li>' . $thisTask . ' - ' . $completed . '</li>';
//              <form action="/markascomplete/'. $thisTask->getId() . '" method="post">
//              <button type="submit" name="markAsComplete">Mark as complete</button>
//              </form>';
    }
    ?>
</ul>
</body>
</html>
