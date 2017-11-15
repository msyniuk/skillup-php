'use strict';

//Task1
//Создайте ассоциативный массив содержащий описание человека.
//Задайте поля: имя, возраст, пол, индивидуальный номер.
//Заполните массив. Выведите его в консоли
document.write('<h3>Задача 1</h3>');
var	man = {'name': '', 'age': 0, 'sex': '', 'inn': ''};
man.name = 'Mikhail';
man.age = 37;
man.sex = 'male';
man.inn = '2920211111';
console.log(man.name);
console.log(man.age);
console.log(man.sex);
console.log(man.inn);
document.write(man.name + '<br/>');
document.write(man.age + '<br/>');
document.write(man.sex + '<br/>');
document.write(man.inn + '<br/>');

//Task2
//Создайте ассоциативный массив содержащий описание человека. Задайте поля: имя, возраст, пол, индивидуальный номер.
//Заполните массив. Выведите его в консоли.
//Добавьте в массив метод, который будет рассчитывать год рождения человека исходя из его возраста и возвращать его.

document.write('<h3>Задача 2</h3>');
man.name = 'Lili';
man.age = 35;
man.sex = 'female';
man.inn = '2920211112';
man.run = function(age) {
    return new Date().getFullYear() - age
}
console.log(man.name);
console.log(man.age);
console.log(man.sex);
console.log(man.inn);
document.write(man.name + '<br/>');
document.write(man.age + '<br/>');
document.write(man.sex + '<br/>');
document.write(man.inn + '<br/>');
document.write('Год рождения: ' + man.run(man.age) + '<br/>');

//Task3
//Создайте ассоциативный массив свойство mas которое содержит массив чисел (любого количества),
//добавьте метод, который выводит сумму чисел содержащихся в mas.
document.write('<h3>Задача 3</h3>');
var obj = {mas: [10, 20, 30, 40, 50]};
obj.sum = function(arr) {
    var sum = 0;
    for (var i = 0; i < arr.length; i++) {
        sum += arr[i];
    }
    return sum;
}
document.write('Сумма чисел в mas = ' + obj.sum(obj.mas) + '<br/>');

//Task4
//Создайте массив, ключами которого служат артикулы товара (любое пятизначное число),
//а значениями – ассоциативный массив, который содержит название товара, стоимость,
//вес единицы товара, ссылку на изображение, отметку о доступности товара на складе.
//Выведите массив в консоль. Выведите на страницу HTML описание первого товара.
document.write('<h3>Задача 4</h3>');
var goods = {
	11111 : {
		"name": "Бочка",
		"cost": 230,
		"weight":300,
        "picture": 'albom.ru/pic1.jpg',
        "availability": 'yes'
	},
	22222 : {
		"name": "Слон",
		"cost": 34,
		"weight":3000,
        "picture": 'albom.ru/pic2.jpg',
        "availability": 'yes'
	},
	33333 : {
		"name": "Велосипед",
		"cost": 23,
		"weight":13,
        "picture": 'albom.ru/pic3.jpg',
        "availability": 'no'
	},
	44444 : {
		"name": "Сливы",
		"cost": 280,
		"weight":1,
        "picture": 'albom.ru/pic4.jpg',
        "availability": 'yes'
	},
	55555 : {
		"name": "Вишни",
		"cost": 19,
		"weight":1,
        "picture": 'albom.ru/pic5.jpg',
        "availability": 'no'
	},
};
for (var i in goods[11111]) {
    document.write(i + ': ' + goods[11111][i] + '<br/>');
}

//Task5
//Дан ассоциативный массив. Выведите его на страницу html в формате ключ — значение. Каждый элемент с новой строки.
document.write('<h3>Задача 5</h3>');
var day = {
	"d1" : "Понедельник",
	"d2" : "Вторник",
	"d3" : "Среда",
	"d4" : "Четверг"
        };
for (var i in day) {
   document.write(i + ' - ' + day[i] + '<br/>');
}

//Task6
//Дан ассоциативный массив. Выведите его на страницу html в формате ключ *** значение. Каждый элемент с новой строки.
document.write('<h3>Задача 6</h3>');
var arr = {
	"k1" : "17w4",
	"k2" : "1sfsg7",
	"k3" : "17nd",
	"k16" : "1237",
	"k14" : "1w37",
	"3k1" : "1wrw7"
       };
for (var i in arr) {
   document.write(i + ' *** ' + arr[i] + '<br/>');
}

//Task7
//Дан ассоциативный массив. Выведите его в консоль. Преобразуйте строку и сохраните в LocalStorage под именем mass.
//Считайте из LocalStorage запись mass. Выведите в консоль. Преобразуйте в массив и повторите вывод в консоль.
document.write('<h3>Задача 7</h3>');
var arr = {
	"k1" : "17w4",
	"k2" : "1sfsg7",
	"k3" : "17nd",
	"k16" : "1237",
	"k14" : "1w37",
	"3k1" : "1wrw7",
	   };
for (var i in arr) {
   console.log(arr[i]);
   document.write(i + ' *** ' + arr[i] + '<br/>');
}
document.write('Остальной вывод в консоли<br/>');
var str = JSON.stringify(arr);

localStorage.setItem('mass', str);

str = localStorage.getItem('mass');

console.log(str);

arr = JSON.parse(str);

console.log(arr);

//Task8
//Дан массив товаров, выведите товары на страницу цены которых больше 20
document.write('<h3>Задача 8</h3>');
var goods = {
	"dd" : {
		"name": "Яблоки",
		"cost": 13
	},
	"dc" : {
		"name": "Груши",
		"cost": 23
	},
	"cd" : {
		"name": "Абрикосы",
		"cost": 33
	},
	"dee" : {
		"name": "Сливы",
		"cost": 43
	},
	"dd2" : {
		"name": "Вишни",
		"cost": 19
	},
};
for (var i in goods) {
    if ( goods[i]['cost'] > 20 ) {
        document.write(goods[i]['name'] + ' - ' + goods[i]['cost'] + '<br/>');
    }
}

//Task9
//Дан массив товаров, выведите товары на страницу HTML,
//цены которых лежат в диапазоне от 220 до 300 и количество (amount) больше 200
document.write('<h3>Задача 9</h3>');
var goods = {
	"apple" : {
		"name": "Яблоки",
		"cost": 230,
		"amount":300
	},
	"pear" : {
		"name": "Груши",
		"cost": 34,
		"amount":100
	},
	"apricot" : {
		"name": "Абрикосы",
		"cost": 23,
		"amount":170
	},
	"plum" : {
		"name": "Сливы",
		"cost": 280,
		"amount":250
	},
	"cherry" : {
		"name": "Вишни",
		"cost": 19,
		"amount":312
	},
};
for (var i in goods) {
    if ( goods[i]['cost'] >= 220 && goods[i]['cost'] <= 300 && goods[i]['amount'] > 200 ) {
        document.write(goods[i]['name'] + ' - ' + goods[i]['cost'] + ' - ' + goods[i]['amount'] +'<br/>');
    }
}
