'use strict';

document.write
for (var i = 2; i<= 10; i++) {
    document.write("<div style='float: left; width: 100px;'>");
    for (var j = 2; j <= 10; j++) {
        document.write(i + '*' + j + ' = ' + i * j + '<br />');
    }
    document.write('</div>');
}

var str = '';
for (var i = 1; i < 10; i++) {
    str += i;
}
alert(str);


var str = '';
for (var i = 9; i > 0; i--) {
    str += i;
}
alert(str);

var str = '-';
for (var i = 1; i < 10; i++) {
    str += i + '-';
}
alert(str);

var str = '';
for (var i = 1; i <= 20; i++) {
    document.write("<div style='float: left; width: 400px;'>");
    str += 'x';
    document.write(str + '<br>');
}

for (var i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++) {
        document.write(i);
    }
    document.write('<br>');
}

var str = '';
for(var i = 0; i <= 5; i++) {
    str += 'xx';
    document.write(str + '<br>');
}
