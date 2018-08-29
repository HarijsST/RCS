// var someNumber = 123; // integer
// var someDecimal = 3.14; // float
// var someWord = 'Hello world!'; // string '' "" ``
// var someTrue = true; //boolean (bool)
// var someNothing = null; // null (bez vērtības)

// var someArray = [
//     'vaz',
//      'zaz',
//       'gaz',
//        'maz',
//         'bmw',
//          1,
//           3.14,
//            true,
//         ]; // array (iekļāuj sevī vairākas vērtības vai lietas)
//         var i = 1;
//         console.log(someArray[1]);

//         var johnny = {
//             name: 'Johnny',
//             surname: 'Doe',
//             fullName: 'Johnny Doe',
//             age: '21',
//         } // object

// console.log(johnny.name);

// var i = 1;
// console.log(i);
// i = 2
// console.log(i);
// i = 'foo'
// console.log(i);

// +
// -
// *
// /
// %
// var number1 = 2;
// var number2 = 4;
// console.log(1 + 1);
// console.log(2 + 2 * 2);
// console.log(number1 + number2);
// console.log(number1 + 3);
// var number3 = number1 - number2;
// console.log(number3);
// console.log((2+2) * 2); //8
// number1 = number1 + 1;
// number1 += 2;
// number1 ++;
// number1 --;
// console.log(number1);

// console.log(1 / 0);
// console.log (5 % 2);

// console.log('foo' + 'bar');
// console.log(1 + '1');
// console.log ('1' + 1);


// == (ir vienāds)
// != (nav vienāds)
// > (lielāks par)
// < (mazāks par)
// >= (lielāks vai vienāds)
// <= (mazāks vai vienāds)
// === (strict comparison (eaqual))
// !== (strict comparison (not eaqual))

// kvadrātiekavas tikai masīviem [], figūriekavas objektiem {}, parastās iekavas funkciju izsaukšanai vai parametri if ()

// if (true) {
//     console.log('was true');
// } else {
//     console.log('was not true');
// }


// var name = 'Sanita';
// if (name == 'Anna') {
//     console.log('Čau Anna');
// } else if (name == 'Jānis') {
//         console.log('Whats up Jānis');
//     }else {
//         console.log('Nepazīstu Tevi.');
//     }

// var a = 1;
// var b = 2;
// var c = 3;
// // && - nozīmē un (and)
// // || - nozīmē vai (or)
// if (a == 2 && b == 3 || c == 3) {

// }

// var name = 'Jānis';
// var name = 'Kārlis';
// var name = 'Zane';

// if (name == 'Jānis' || name == 'Kārlis' || name == 'Zane') {
// console.log('Čau zināmais cilvēk')
// } else {
//     console.log('Nepazīstu Tevi')
// }


// switch (name) {
//     case 'Jānis',
//     console.log('Čau zināmais cilvēk');
//     break;
//     case 'Kārlis',
//     console.log('Čau zināmais cilvēk');
//     break;
//     case 'Zane',
//     console.log('Čau zināmais cilvēk');
//     break;
//     default:
//     console.log('Nepazīstu Tevi');
// }

// var name = 'Kārlis';
// switch (name) {
//     case 'Jānis':
//     case 'Kārlis':
//     case 'Zane':
//     console.log('Čau zināmais cilvēk');
//     default:
//     console.log('Nepazīstu Tevi');
// }

// var i = 0;
// while (i < 10) {
//     if (i < 5)
//     console.log(i);
//     i++
// }
// console.log(i);


// Ctrl + C ja kaut kas ir uzkāries



// var i = 0;
// while (i < 20) {   
//     if (i % 2 == 0) 
//     console.log (i);
// }
// i++

// i = 0;
// while (i < 0) {
//     conole.log(i);
//     i += 2
// }


// var i3 = 20;
// while (i3 >= 0) {
//     console.log(i3);
//     i3--;
// }


// var i = 0;
// while (i < 20) {
//     i++
//     if (i == 5) {
// continue;
//     }
//     console.log(i);
// }

// cikli ir loop --!!!
// iterācija ir viens cikls --!!!

// var i = 20;
// do {
// console.log(i);
// i++;
// } while (i < 20);

// for (var i = 0; i > 20; i++); {
//     console.log(i);
// }


// for (var i = 20; i > 0; i--); {
//     console.log(i);
// }


// var cars = ['vaz', 'gaz', 'zaz', 'maz',];
// for (var index = 0; index < cars.length; index++) {
//     var car = cars[index];
//     if (index != 2)
//     console.log(car);    
// }


// function addTwoNumbers(number1, number2) {
//     return number1 + number2;
// }

// console.log(addTwoNumbers(2, 3));


// addSomething ('Anna', 20);
// addSomething ('Kārlis', 50);
// addSomething ('Sanita', 30);
// function addSomething (name, age);
// console.log('Čau' + name', Tev ir' + age 'gadi!')


// mājas darbs ir ar for , while
// vismaz 3 if un viens mainīgais un else if
// var lietot arī funkciju

// Mani murgi
// var i = 0;
// while (i < 30) {
//     if (i < 30);
//     console.log(i);
//     i++;
//     if (i % 2);
//     console.log('Fizz');
//     if (i % 3);
//     console.log('Bazz');
//     if (i % 2 && i & 3);
//     console.log('Fizz Bazz');
// }
// console.log(i);




// var i = 0;
// while (i < 30) {
//    if (i % 2 == 0) {
//         console.log('Fizz');
//     }
//     else if (i % 3 == 0) {
//         console.log('Bazz');
//     }
//     else if (i % 2 == 0 && i % 3 == 0) {
//         console.log('Fizz Bazz');
//     }
//     i++;

// }

// PAREIZAIS VARIANTS
// 
for (var i = 0; i <= 30; i++) {
    var output = '';
    if (i % 2 === 0) {
        output = 'Fizz ';
    }
    if (i % 3 === 0) {
        output += 'Bazz ';
    }
    if (output === '') {
        output = i;
    }
    console.log(output)
}





















