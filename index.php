<?php

require_once 'models/Book.php';

$list = Book::findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php foreach($list as $book) { ?>

     <li><a href="Book.php?id=<?php echo $book->id;?>"><?php echo $book->title; ?></a></li>

<?php } ?>
</body>
</html>