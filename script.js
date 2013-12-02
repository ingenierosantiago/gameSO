/*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";


var redipsInit,		// define redipsInit variable
	toggleAnimation,// animation for shift option
	showContent,
	getContent,
	setDropMode;	// function sets dropMode parameter

// redips initialization
redipsInit = function () {
	// reference to the REDIPS.drag lib
	var num = 0;
	var rd = REDIPS.drag;
	// initialization
	rd.init();
	// set shift drop option
	rd.dropMode = 'shift';
	// enable shift animation
	rd.shift.animation = true;
	showContent();
	// on each drop refresh content
	rd.event.dropped = function () {
		showContent();
	};
	// call showContent() after DIV element is deleted
	rd.event.deleted = function () {
		showContent();
	};

};

// function sets drop_option parameter
setDropMode = function (radioButton) {
	REDIPS.drag.dropMode = radioButton.value;
};


// enable / disable animation
toggleAnimation = function (chk) {
	REDIPS.drag.shift.animation = chk.checked;
};

showContent = function () {
	// get content of TD cells in right table
	var td1 = getContent('td1'),
		td2 = getContent('td2'),
		td3 = getContent('td3'),
		td4 = getContent('td4'),
		td5 = getContent('td5'),
		// set reference to the message DIV (below tables)
		message = document.getElementById('message');
	message.innerHTML = 'td1 = ' + td1 + '<br>' +
						'td2 = ' + td2 + '<br>' +
						'td3 = ' + td3 + '<br>' +
						'td4 = ' + td4 + '<br>' +
						'td5 = ' + td5;
};


getContent = function (id) {
	var td = document.getElementById(id),
		content = '',
		cn, i;
	// TD can contain many DIV elements
	for (i = 0; i < td.childNodes.length; i++) {
		// set reference to the child node
		cn = td.childNodes[i];
		// childNode should be DIV with containing "drag" class name
		if (cn.nodeName === 'DIV' && cn.className.indexOf('drag') > -1){
			// append DIV id to the result string
			content += cn.id;
		}
	}
	// cut last '_' from string
	content = content.substring(0, content.length - 1);
	// return result
	return content;
};

var usadosg = new Array();
var usadosm = new Array();
var usadosp = new Array();
var usadosph = new Array();

function repetido(num, usados) {
	var repe = false;
	for (var i=0; i<usados.length; i++) {
		if (num == usados[i]) {
		repe = true;
		}
	}
	return repe;
}

function aleatorio(min, max, usados) {
	if (usados.length<=(max-min)) {
		while (repe != false) {
			var num = Math.floor(Math.random()*(max-min+1))+min;
			var repe = repetido(num, usados);
		}
		usados.push(num);
		return num;
	} else {
		var usados = null;
	}
}

function nueva_partida(){
	temp();
	var score = 0;
	var leng = 0;
	var dx = "<table id='table1'><colgroup><col width='200'/></colgroup><tbody>";
	while(leng < 5){
		dx+="<tr><td><div class='drag orange'>G"+aleatorio(1, 5,usadosg)+"-M"+aleatorio(1, 5,usadosm)+"-P"+aleatorio(1, 5,usadosp)+"-PH"+aleatorio(1, 5, usadosph)+"</div></td></tr>";
		leng+=1;	
	}
	dx+="</tbody></table>";
	document.getElementById('random').innerHTML=dx;
}
function score(){
	var td1 = getContent('td1'),
	td2 = getContent('td2'),
	td3 = getContent('td3'),
	td4 = getContent('td4'),
	td5 = getContent('td5');
	var score = document.getElementById('score');
	score.innerHTML = 'Puntuacion = ';
		
}
function onWinCondition(){
	iWon = true;
	clearInterval(aInt);
	temp();
}
var aInt = null;
var time_left = 0;
function temp(){
	time_left = 60000;
	aInt = setInterval(tick,60000);
	aInt = setInterval(update_clock,1000);
}
function update_clock(){
	document.getElementById("clock").innerHTML = time_left/1000;
	time_left -= 1000;
}
var iWon = false;
function tick(){
	if(!iWon){
		var r=confirm("Se acabo el tiempo!\nsi quiere intentarlo de nuevo presione cancelar");
		if (r==true){
			location.reload();
		}
	}
}

// add onload event listener
if (window.addEventListener) {
	window.addEventListener('load', redipsInit, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', redipsInit);
}
