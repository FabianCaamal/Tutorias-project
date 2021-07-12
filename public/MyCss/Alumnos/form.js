var form1 = document.getElementById('form1');
var form2 = document.getElementById('form2');
var form3 = document.getElementById('form3');
var form4 = document.getElementById('form4');
var form5 = document.getElementById('form5');
var form6 = document.getElementById('form6');

var next1 = document.getElementById('next1');
var next2 = document.getElementById('next2');
var next3 = document.getElementById('next3');
var next4 = document.getElementById('next4');
var next5 = document.getElementById('next5');


var back1 = document.getElementById('back1');
var back2 = document.getElementById('back2');
var back3 = document.getElementById('back3');
var back4 = document.getElementById('back4');

var cuadro = document.getElementById('cuadro');

// primer formulario ====> Datos academicos
next1.onclick = function(){
    form1.style.left = "-450px";
    form2.style.left = "40px";
    cuadro.style.height = '980px';
}

// segundo formulario ====> Datos socioeconomicos
back1.onclick = function(){
    form1.style.left = "40px";
    form2.style.left = "450px";
    cuadro.style.height = '1360px';
}
next2.onclick = function(){
    form2.style.left = "-450px";
    form3.style.left = "40px";
    cuadro.style.height = '700px';
}

// tercer formulario ====> Datos Academicos
back2.onclick = function(){
    form2.style.left = "40px";
    form3.style.left = "450px";
    cuadro.style.height = '980px';
}
next3.onclick = function(){
    form3.style.left = "-450px";
    form4.style.left = "40px";
    cuadro.style.height = '640px';
}

// cuarto formulario ====> Datos medicos
back3.onclick = function(){
    form3.style.left = "40px";
    form4.style.left = "450px";
    cuadro.style.height = '700px';
}
next4.onclick = function(){
    form4.style.left = "-450px";
    form5.style.left = "40px";
    cuadro.style.height = '370px';
}

// quinto formulario ====> Finalizacion
back4.onclick = function(){
    form4.style.left = "40px";
    form5.style.left = "450px";
    cuadro.style.height = '640px';
}

