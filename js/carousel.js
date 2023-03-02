"use strict";

function foto1(){
    document.getElementById("fotoLampara").src="img/info1.jpg";
    document.getElementById("fondo").classList.add("show");
    document.getElementById("fondo").classList.remove("noshow");
     
 }
 
 function foto2(){
     document.getElementById("fotoLampara").src="images/lampara_off.jpg";
     document.getElementById("fondo").classList.add("apagado");
     document.getElementById("fondo").classList.remove("prendido");
 }
 
 document.getElementById("btn-prender").addEventListener("click",Prender);
 document.getElementById("btn-apagar").addEventListener("click",Apagar);