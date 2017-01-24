<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Книги
    </title>
</head>
<body>
<? foreach($data as $book):?>
    <div>
        <?=$book['BookId'];?> : <?=$book['name'];?>
    </div>
<? endforeach;?>
</body>
</html>