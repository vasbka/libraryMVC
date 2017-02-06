<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Книги
    </title>
</head>
<body>
<? foreach($data['books'] as $book):?>
    <div>
        <?php echo $book['BookId'];?> : <?php echo $book['name'];?>
    </div>
<? endforeach;?>
</body>
</html>