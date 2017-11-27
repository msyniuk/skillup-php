<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ № 15 (запросы)</title>
</head>
<body>
<h3><u>Домашнее задание № 15</u></h3>
<form action="runquery.php" method="post">
    <p>Выберите запрос и нажмите кнопку <b><i>"Выполнить запрос"</i></b> внизу страницы.</p>
    <p><b><u>На SELECT</u></b></p>
    <p><input name="query" type="radio" value="qt1" checked>Выбрать работника с id = 3</p>
    <p><input name="query" type="radio" value="qt2">Выбрать работников с зарплатой 1000$</p>
    <p><input name="query" type="radio" value="qt3">Выбрать работников в возрасте 23 года</p>
    <p><input name="query" type="radio" value="qt4">Выбрать работников с зарплатой более 400$</p>
    <p><input name="query" type="radio" value="qt5">Выбрать работников с зарплатой равной или большей 500$</p>
    <p><input name="query" type="radio" value="qt6">Выбрать работников с зарплатой НЕ равной 500$</p>
    <p><input name="query" type="radio" value="qt7">Выбрать работников с зарплатой равной или меньшей 900$</p>
    <p><input name="query" type="radio" value="qt8">Узнайте зарплату и возраст Васи</p>
    <p><b><u>На OR и AND</u></b></p>
    <p><input name="query" type="radio" value="qt9">Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно)</p>
    <p><input name="query" type="radio" value="qt10">Выбрать работника Петю</p>
    <p><input name="query" type="radio" value="qt11">Выбрать работников Петю и Васю</p>
    <p><input name="query" type="radio" value="qt12">Выбрать всех, кроме работника Петя</p>
    <p><input name="query" type="radio" value="qt13">Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$</p>
    <p><input name="query" type="radio" value="qt14">Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$</p>
    <p><input name="query" type="radio" value="qt15">Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$</p>
    <p><input name="query" type="radio" value="qt16">Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$</p>
    <p><b><u>На INSERT</u></b></p>
    <p><input name="query" type="radio" value="qt17">Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом</p>
    <p><input name="query" type="radio" value="qt18">Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом</p>
    <p><input name="query" type="radio" value="qt19">Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31</p>
    <p><b><u>На DELETE</u></b></p>
    <p><input name="query" type="radio" value="qt20">Удалите работника с id=7</p>
    <p><input name="query" type="radio" value="qt21">Удалите Колю</p>
    <p><input name="query" type="radio" value="qt22">Удалите всех работников, у которых возраст 23 года</p>
    <p><b><u>На UPDATE</u></b></p>
    <p><input name="query" type="radio" value="qt23">Поставьте Васе зарплату в 200$</p>
    <p><input name="query" type="radio" value="qt24">Работнику с id=4 поставьте возраст 35 лет</p>
    <p><input name="query" type="radio" value="qt25">Всем, у кого зарплата 500$ сделайте ее 700$</p>
    <p><input name="query" type="radio" value="qt26">Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23</p>
    <p><input name="query" type="radio" value="qt27">Поменяйте Васю на Женю и прибавьте ему зарплату до 900$</p>
    <p><input type="submit" value="Выполнить запрос"></p>
</form>
</body>
</html>