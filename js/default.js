"use strict";

let a = document.getElementById('root');

let array = [
	[ 1, 2, 3 ],
	[ 4, 5, 6 ],
	[ 7, 8, 9 ],
];

for(let i=0; i < array.length; i++){
	array[i][i] *= 2;
	array[i][array.length-1-i] *= 2;
}

console.log(array);

// a.innerHTML = array;