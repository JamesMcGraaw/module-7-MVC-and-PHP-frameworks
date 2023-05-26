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

        echo '<li>' . $thisTask .

        '<form action="/markascomplete/'. $task->getId() . '" method="POST">
            <button type="submit">Mark as Complete</button>
        </form>
        </li>';

    }
    ?>
</ul>

<a href="/completedtasks">See completed tasks</a>
</body>
</html>
