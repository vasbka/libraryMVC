<!DOCTYPE html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <srcipt src="add.js"></srcipt>
    <meta charset="utf-8">
    <title>
        Авторы
    </title>
</head>
<body>
<form action="../app/models/Author/insertIntoDB" method="post" id="add">
    <input placeholder="ФИО автора" name="fio">
    <input placeholder="book" name="book">
    <input type="submit" value="enter">

</form>
</body>

</html>