<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ № 16 (запросы join)</title>
</head>
<body>
<h3><u>Домашнее задание № 16</u></h3>
<form action="runquery.php" method="post">
    <p>Выберите запрос и нажмите кнопку <b><i>"Выполнить запрос"</i></b> внизу страницы.</p>
    <p><b><u>SELECT JOIN</u></b></p>
    <p><input name="query" type="radio" value="qt1" checked>Выбрать id заказа и соответствующих пользователей из таблицы users, у которых записи в таблице orders имеют status = 0</p>
    <p><input name="query" type="radio" value="qt2">Выбрать пользователей, у которых есть невыполненные заказы, status = 0</p>
    <p><input name="query" type="radio" value="qt3">Выбрать id, имя, и кол-во заказов всех пользователей из таблицы users, у которых 3 и больше записей поля 'status' = '1' в таблице orders</p>
    <p><input type="submit" value="Выполнить запрос"></p>
</form>
</body>
</html>