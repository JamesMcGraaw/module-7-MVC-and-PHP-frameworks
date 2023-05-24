<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
<h1>Our Books</h1
<ul>
    <?php
    foreach ($books as $book) {
        echo '<li>' . $book['title'] . ' - ' . $book['author'] . '</li>';
    }
    ?>
</ul>
</body>
</html>
