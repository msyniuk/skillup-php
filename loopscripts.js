'use strict';

//Task1
var i,j;
for (i = 1; i <= 10; i++) {
    for (j = 1; j <= 10; j++) {
  document.write(i + ' * ' + j + ' = ' + i*j + '<br/>');
  }
  document.write('<br/>');
}

//Task2
var str = '';
for (i = 1; i < 10; i++) {
    str += i;
  }
document.write(str+'<br/>');

//Task3
str = '';
for (i = 9; i > 0; i--) {
    str += i;
  }
document.write(str+'<br/>');

//Task4
str = '-';
for (i = 1; i < 10; i++) {
    str += i +'-';

  }
document.write(str+'<br/>');

//Task5
str = '';
for (i = 1; i <= 20; i++) {
   str += 'x';
   document.write(str + '<br/>');
}

//Task6
str = '';
for (i = 1; i <= 9; i++) {
    for (j = 1; j <= i; j++) {
    str += i;
  }
  document.write(str + '<br/>');
  str = '';
}


//Task7
str = '';
for (i = 1; i <= 5; i++) {
   str += 'xx';
   document.write(str + '<br/>');
}



