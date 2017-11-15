'use strict';

//Task1
//Дан массив mas. Выведите его на страницу HTML в формате индекс элемента — значение (через три дефиса).
//Каждый элемент с новой строки.
document.write('<h3>Задача 1</h3>');
var i;
var	mas = [15, 'hello', 'trump', 23, 'world', 999, 176];
for (i = 0; i < mas.length; i++) {
   document.write(i+ '---' + mas[i] + '<br/>');
}

//Task2
//Дан массив mas. Выведите его на страницу HTML в формате индекс элемента — значение (через дефис).
//Каждый элемент с новой строки. Выводить нужно те элементы, значение которых больше пяти (5).

document.write('<h3>Задача 2</h3>');
mas = [2, 3, 4, 5, 6, 4, 77, 32, 4];
for (i = 0; i < mas.length; i++) {
   if ( mas[i] > 5 ) {
   document.write(i+ '-' + mas[i] + '<br/>');
   }
}

//Task3
//У нас есть массив goods. Сколько в нем элементов – не знаем, но можем прочитать из goods.length.
//Напишите код для получения последнего элемента goods
document.write('<h3>Задача 3</h3>');
var goods = ['first', 'second', 'tron', 'last'];
document.write('Последний элемент = ' + goods[goods.length - 1] + '<br/>');

//Task4
//У нас есть массив goods. Напишите код для добавления в его конец значения «Компьютер».
document.write('<h3>Задача 4</h3>');
goods[goods.length] = 'компьютер';
for (i = 0; i < goods.length; i++) {
   document.write(goods[i] + '<br/>');
}


//Task5
//Создайте массив styles с элементами «Джаз», «Блюз».
//Добавьте в конец значение «Рок-н-Ролл»
//Замените предпоследнее значение с конца на «Классика». Код замены предпоследнего значения должен работать для массивов любой длины.
//Удалите первое значение массива и выведите его alert.
//Добавьте в начало значения «Рэп» и «Регги».
document.write('<h3>Задача 5</h3>');
var styles = ['Джаз', 'Блюз'];
styles[styles.length] = 'Рок-н-Ролл';
styles[styles.length-2] = 'Классика';
var first_elem;
first_elem = styles.shift();
alert(first_elem);
styles.unshift('Рэп', 'Регги');
for (i = 0; i < styles.length; i++) {
   document.write(styles[i] + '<br/>');
}

//Task6
//Напишите код для вывода alert случайного значения из массива
document.write('<h3>Задача 6</h3>');
var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var elem = arr[Math.floor(Math.random() * arr.length)];
document.write(elem + '<br/>');

//Task7
//Напишите код, который:
//Запрашивает по очереди значения при помощи prompt и сохраняет их в массиве.
//Заканчивает ввод, как только посетитель введёт пустую строку, не число или нажмёт «Отмена».
//При этом ноль 0 не должен заканчивать ввод, это разрешённое число.
//Выводит сумму всех значений массива
document.write('<h3>Задача 7</h3>');
arr = [];
while (true)
{
    var elem = prompt('Введите число', 0);
    if (elem === "" || elem === null || isNaN(elem)) break;
    arr.push(+elem);
}
var sum = 0;
for (i = 0; i < arr.length; i++)
{
    sum += arr[i];
}
document.write('Сумма всех элементов массива = ' + sum + '<br/>');

//Task8
//Что выведет этот код
document.write('<h3>Задача 8</h3>');
//var arr = [1, 2, 3];
//
//var arr2 = arr;
//arr2[0] = 5;
//
//alert( arr[0] );
//alert( arr2[0] );
var message = 'В обоих случаях выводится 5. Массив это объект. В переменную arr2 копируется не массив, а ссылка на него.<br/>Массив остается один, и изменения внесенные через разные переменные изменяют один и тот же массив.<br/>';
document.write(message);

//Task9
//Создайте функцию find(arr, value), которая ищет в массиве arr значение value и возвращает его номер, если найдено, или -1, если не найдено.
document.write('<h3>Задача 9</h3>');
arr = ["test", 2, 1.5, false];
function find(arr, find_elem){
    for (var i = 0; i < arr.length; i++){
        if (find_elem === arr[i]){
            return i;
        }
    }
    return -1;
}
document.write(find(arr, "test")+'<br/>'); // 0
document.write(find(arr, 2)+'<br/>'); // 1
document.write(find(arr, 1.5)+'<br/>'); // 2
document.write(find(arr, 0)+'<br/>'); // -1

//Task10
//Создайте функцию filterRange(arr, a, b), которая принимает массив чисел arr и возвращает новый массив,
//который содержит только числа из arr из диапазона от a до b. То есть, проверка имеет вид a ≤ arr[i] ≤ b.
//Функция не должна менять arr
document.write('<h3>Задача 10</h3>');
arr = [5, 4, 3, 8, 0];
function filterRange(arr, a, b){
    var newarr = [];
    for (var i = 0; i < arr.length; i++){
        if (arr[i] >= a && arr[i] <= b){
            newarr.push(arr[i]);
        }
    }
    return newarr;
}
var filtered = filterRange(arr, 5, 8);
for (var i = 0; i < filtered.length; i++) {
   document.write(filtered[i] + '<br/>');
}

//Task11
//Реализуйте «Решето Эратосфена» в JavaScript, используя массив.
//Найдите все простые числа до 100 и выведите их сумму.
document.write('<h3>Задача 11</h3>');
arr = [];
for (i = 2; i < 100; i++){
    arr[i] = true;
}
var p = 2;
do {
    for (i = p * 2; i < 100; i += p){
        arr[i] = false;
    }
    for (i = p + 1; i < 100; i++){
        if (arr[i]) break;
    }

    p = i;
} while (p * p < 100);

sum = 0;
for (i = 0; i < arr.length; i++){
    if (arr[i]) {
        sum += i;
    }
}
document.write('Сумма простых чисел от 1 до 100 = ' + sum + '<br/>');

//Task12
//На входе массив чисел, например: arr = [1, -2, 3, 4, -9, 6].
//Задача – найти непрерывный подмассив arr, сумма элементов которого максимальна.
//Ваша функция должна возвращать только эту сумму.
document.write('<h3>Задача 12</h3>');
arr = [1, -2, 3, 4, -9, 6];
function maxSumSubArray(arr){
    var sum = 0;
    var s = 0;
    for (var i = 0; i < arr.length; i++){
        s += arr[i];
        sum = Math.max(sum, s);
        if ( s < 0 ) s = 0;
    }
    return sum;
}
document.write('Максимальная cумма подмассива = ' + maxSumSubArray(arr) + '<br/>');