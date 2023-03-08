"use strict";

let nombre = document.querySelector("#name");
let contact = document.querySelector("#contact");
let sendEmail = document.querySelector("#sendEmail");
document.querySelector("#sendEmail").addEventListener("click",SendMail);

function SendMail(){
    sendEmail.href = "mailto:contacto@haizea.com?subject=Consulta&body=Hola mi nombre es " + nombre.value + " y mi número de contacto es " + contact.value + ". El motivo de mi contacto es " ;
}
