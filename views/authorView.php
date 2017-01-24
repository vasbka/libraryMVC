<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Авторы
    </title>
</head>
<body>
<? foreach($data as $book):?>
    <div>
        <?=$book['authorId'];?> : <?=$book['namev'];?>
    </div>
<? endforeach;?>
</body>
</html>