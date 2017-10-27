'use strict';

var arr = [],
    x = '',
    i;
for (var i = 0; i < 10; i++) {
    x += 'x'
    arr.push(str);
}
console.log(arr);

function arrayFill(s, count) {
    var i, res = '';
    for (var i = 0; i < count; i++) {
        res += s;
    }
    return res;
}

var i,
    arr = [];
for (i = 1; i <= 9; i++){
    arr.push(arrayFill(i, i));
}
console.log(arr);

function arrayFill(s, count) {
        var i, res = '';
    for (var i = 0; i < count; i++) {
        res += s;
    }
    return res;
}
console.log(arrayFill('123-', 10));

function func(arr) {
    var sum = 0;
    for (var i = 0 ; i < arr.length; i++) {
        sum += arr[i];
        if (sum > 10) {
            return i + 1;
        }
    }
}
console.log(func([1, 2, 3, 4, 5, 6, 7, 8, 9]));



var arr = [1, 3, 5, 6, 7, 9];
var result = [];
for (var i = arr.length - 1; i >= 0; i--) {
    result.push(arr[i]);
}
console.log(result);

var arr = [[1, 2, 3], [4, 5], [6]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        sum += arr[i][j];
    }
}
alert(sum);

var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        for (var k = 0; k < arr[i][j].length; k++) {
            sum += arr[i][j][k];
        }
    }
}
alert(sum);