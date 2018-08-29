// alert('Hello world!');
// alert ir ar vienu pogu
// confirm ir ar divām izvēlnēm

function buttonClick() {
    var element = document
    .querySelector('#some-paragraph');
    if (element.innerText == 'foo') {
        element.innerText = 'bar'; 
    } else {
        element.innerText = 'foo'
    }      
}
// setInterval(buttonClick, 500);  cipars ir milisekundes

console.log(document.querySelectorAll('.other-paragraph'));

function checkParagaphConent() {
    var elements = document.querySelectorAll('.other-paragraph');
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        console.log(element);
        if (element.innerText == 'foo ' + i) {
            element.innerText = 'bar ' + i; 
        } else {
            element.innerText = 'foo ' + i
        }    
    }
    
}

function add(number) {
    var element = document
.getElementById('number');
var currentValue = parseInt(element.innerText);
element.innerText = currentValue + parseInt(number);
}

var count = 0;
function addCount() {
    count++;
    document
        .getElementById('counter')
        .innerText = count;
}


function isAnagram(str1, str2) {
    str1 = str1.replace(' ', '').split('').sort().join('')
    str1 = str2.replace(' ', '').split('').sort().join('')
return str1 == str2;
}
console.log('sula '+ isAnagram('sula', 'alus'));
console.log('aaa '+ isAnagram('aaa', 'aaa'));
console.log('aab '+ isAnagram('aab', 'aba'));
console.log('random '+ isAnagram('asdsdsg', 'kjnlbhvi'));


function button1Click() {
   var  element = document.getElementById('text');
    if (element.innerText == 'foo') {
        element.innerText = 'bar'
    } else {
        element.innerText = 'foo'
    }
}

function button2Click() {
    var  element = documentById('');
    if (element.innerText == 'foo') {
        element.innerText = 'bar'
    } else if (element.innerText == 'bar') {
        element.innerText = 'baz'
    } else (element.innerText == 'baz') 
        element.innerText = 'foo'
    
}










