'use strict';

var goods = [1, 4, 6, 7, 8],
    lastItem = goods[goods.length - 1];
alert(lastItem);

var goods = ['Привет', 'мир', 'чайки', 'вороны'];
    goods.push("Компьютер");
alert(goods);

var styles = ['Джаз', 'Блюз'];
    styles.push('Рок-н-ролл');
    styles[styles.length - 2] = 'Классика';
    alert(styles.shift());
    styles.unshift("Рэп", "Регги");
    alert(styles);

var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var max = arr.length - 1, min = 0;
var rand = min + Math.floor(Math.random() * (max + 1 - min));
alert(arr[rand]);


var mas = [],
    sum = 0;
while (true) {
    var a = prompt('Введите Ваше число', 0);
    if (a === "" || a === null || isNaN(a)) break;
    mas.push(+a);
}
for (var i = 0; i < mas.length; i++) {
    sum += mas[i];
}
alert('Сумма чисел равна ' +sum );



var mas = [5, 3, 2, 2, 8, 15, 7];
var num = find(mas, 7);
function find(arr, value) {
    if (arr.indexOf) {
        return arr.indexOf(value);
    }
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] === value) return i;
    }
    return -1;
}
alert( num );



var arr = [7, 1, 2, 3, 5, 9, 12, 16, 12],
    filtr = filterRange(arr, 1, 9);
function filterRange(arr, a, b) {
    var results = [];
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= a && arr[i] <= b) {
            results.push(arr[i]);
        }
    }
    return results;
}
alert( filtr );


var arr = [], p = 2, sum = 0;
for (var i = 2; i < 100; i++) {
    arr[i] = true
}
do {
    for (i = 2 * p; i < 100; i += p) {
        arr[i] = false;
    }
    for (i = p + 1; i < 100; i++) {
        if (arr[i]) break;
    }
    p = i;
} while (p * p < 100);
for (i = 0; i < arr.length; i++) {
    if (arr[i]) {
        sum += i;
    }
}
alert('Решето Эратосфена (сумма чисел): ' +sum );

function getMaxSubSum(arr) {
    var maxSum = 0,
        partialSum = 0;
    for (var i = 0; i < arr.length; i++) {
        partialSum += arr[i];
        maxSum = Math.max(maxSum, partialSum);
        if (partialSum < 0) partialSum = 0;
    }
    return maxSum;
}

alert( getMaxSubSum([-9, 8, 6, 1]) );
alert( getMaxSubSum([2, -2, 4, 7, -6]) );
alert( getMaxSubSum([-8, 15, 9, 12]) );
alert( getMaxSubSum([78, 18, 9, 4, -5]) );
alert( getMaxSubSum([24, 12, 18]) );
alert( getMaxSubSum([-28, -16, 11]) );


