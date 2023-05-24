<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Staff</title>
</head>
<body>
<h1>Current Staff</h1
    <p>Please see below for our current management</p>

    <?php
    foreach ($staffs as $staff) {
        echo '<p>Name: ' . $staff['name'] . '</p>';
        echo '<p>Position: ' . $staff['position'] . '</p>';
    }
    ?>

</body>
</html>
