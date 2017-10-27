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

