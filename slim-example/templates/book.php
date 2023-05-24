<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
</head>
<body>
<h1>A Good Book</h1
<ul>
    <?php
    echo '<p>' . $book->getTitle() . ' - ' . $book->getAuthor() . '</p>';
    ?>
</ul>
</body>
</html>
