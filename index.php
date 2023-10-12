<?php
require_once 'functions.php';
$index=0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
    input {
        margin-bottom: 5px;
    }

    select {
        margin-bottom: 5px;
    }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<?php $books = getBooks(); ?>

<body>
   <div style="position: absolute ">

        <form action= "search.php" method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" value="Search">
        </form>

        <table border="1">
            <caption><h3>Book List</h3></caption>
            <thead>
                <tr>
                    <th width="300">Title</th>
                    <th width="200">Author</th>
                    <th width="5">Availability</th>
                    <th width="10">Pages</th>
                    <th width="20">ISBN</th>
                    <th width="30">Update</th>
                    <th width="30">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $key => $book): ?>
                <tr>
                    <td> <?= $book['title'] ?> </td>
                    <td><?= $book['author'] ?></td>
                    <td><?= $book['available']?></td>
                    <td><?= $book['pages'] ?> </td>
                    <td><?= $book['isbn'] ?></td>
                    <td><a href="update.php?index=<?php echo $index?>">Update</a></td>
                    <td><a href="delete.php?index=<?php echo $index?>">Delete</a></td>
                </tr>
                <?php $index++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
?> <br> <br> <br>
<div class="addBook"><a  href="addNew.php">Add New Book</a></div>



</body>

</html>