'use strict';

var day,
    dayIsCorrect = false;

function ask () {
    var day;

    day = prompt('What day is today? (from 1 to 10)?');

    switch (day) {
        case '1':
            alert('the weekend was over');
            break;
        case '2':
        case '3':
        case '4':
            alert('today to work');
            break;
        case '5':
            alert('weekend is coming soon');
            break;
        case '6':
        case '7':
            alert('cheers, rest!');
            break;
        default:
            alert('be more careful!');
            ask();
    }
}

ask();
alert('Wow, well done!!!');
