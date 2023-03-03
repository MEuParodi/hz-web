"use strict";

let nombre = document.querySelector("#name");
let contact = document.querySelector("#contact");
let email = document.querySelector("#email");
// document.querySelector("#email").addEventListener("click",SendMail);

function SendMail(){
    email.href = "mailto:contacto@haizea.com?subject=Consulta&body=Hola mi nombre es " + nombre.value + " y mi número de contacto es " + contact.value + ". El motivo de mi contacto es " ;
}
