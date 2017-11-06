'use strict';

//Task1
document.write('<h3>Задача 1</h3>');
var i, arr = [], str = '';
for (i = 0; i < 20; i++) {
   str += 'x';
   arr[i] = str;
   document.write(arr[i] + '<br/>');
}

//Task2
document.write('<h3>Задача 2</h3>');
str = '';
arr = [];
for (i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++) {
    str += i;
  }
  arr[i] = str;
  document.write(arr[i] + '<br/>');
  str = '';
}

//Task3
document.write('<h3>Задача 3</h3>');
function arrayFill(elem, count)
{
    var arr = [];
    for (i = 0; i < count; i++) {
        //arr[i] = elem;
        arr.push(elem);
        document.write(arr[i] + '<br/>');
    }

}

var count = 10
arrayFill ('ку-ку-руку', count);

//Task4
document.write('<h3>Задача 4</h3>');
var sumelem = 0;
arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
for (i = 0; i < arr.length; i++) {
    sumelem += arr[i];
        if (sumelem > 10){
            document.write('Чтобы получить сумму больше 10 надо сложить первые ' + (i+1) + ' эл.<br/>');
            break;
        }
}
if (sumelem <= 10) {
   document.write('Даже если все сложить не получается больше 10'+ '<br/>');
}

//Task5
document.write('<h3>Задача 5</h3>');
arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var newarray = [];
for (i = 1; i <= arr.length; i++) {
    newarray[i]=arr[arr.length - i];
    document.write(newarray[i] + '<br/>');
}

//Task6
document.write('<h3>Задача 6</h3>');
sumelem = 0;
arr = [[1, 2, 3], [4, 5], [6], [10, 11, 12]];
for (i = 0; i < arr.length; i++) {
    for (j = 0; j < arr[i].length; j++) {
    sumelem += arr[i][j];
  }
}
document.write('Сумма элементов двумерного массива = ' + sumelem + '<br/>');

//Task7
document.write('<h3>Задача 7</h3>');
sumelem = 0;
arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
for (i = 0; i < arr.length; i++) {
    for (j = 0; j < arr[i].length; j++) {
        for (var k = 0; k < arr[i][j].length; k++) {
            sumelem += arr[i][j][k];
        }
    }
}
document.write('Сумма элементов трехмерного массива = ' + sumelem + '<br/>');



