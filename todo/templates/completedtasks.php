<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<h1>Jobs you've completed</h1>

<ul>
    <?php
    foreach ($tasks as $task) {

        echo '<li>' . $thisTask = $task->getTask() .

        '<form action="/deletetask/' . $task->getId() . '" method="POST">
         <button type="submit">Delete Task</button>
         </form>
         </li>';

    }
    ?>
</ul>

<a href="/tasks">Go back to tasks</a>
</body>
</html>
