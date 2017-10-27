'use strict';

var arr = [3, 2, 4, 6, 7, 9, 8, 4, 5],
    sum = 0;
for (var i = 0; i < arr.length; i++) {
    sum += arr[i];
    if (sum > 10) {
        console.log(i + 1);
        break;
    }
}

var arr =[2, 7, 6, 8, 2];
var result = [];
for (var i = arr.length - 1; i >= 0; i--) {
    result.push(arr[i]);
}
console.log(result);

var arr = [[2,3], [4,7,5], [3,2]],
    sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        sum += arr[i][j];
    }
}
console.log(sum);

var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]],
    sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        for (var k = 0; k < arr[i][j].length; k++) {
            sum += arr[i][j][k];
        }
    }
}
console.log(sum);



