/*global document ,setInterval , clearInterval*/
var temp1 = document.getElementById('numcode');
var dd = setInterval(function () {
	'use strict';
	temp1.textContent = parseInt(temp1.textContent) + 1;
	if (temp1.textContent > 6232) {
		temp1.textContent = 6232;
		clearInterval(dd);
    }
}, 5);
var temp2 = document.getElementById('numpro');
var dd1 = setInterval(function () {
	'use strict';
	temp2.textContent = parseInt(temp2.textContent) + 1;
	if (temp2.textContent > 15) {
		temp2.textContent = 15;
		clearInterval(dd1);
    }
}, 100);