'use strict';

var num = parseInt(prompt("Ingrese un Numero"));

document.write("<h1>Tablas de multiplicar del numero "+num+": </h1>");
document.write("<ul>");
for(var i = 1;i <=10;i++){
   document.write("<li>"+num+" X "+i+" = "+num*i+"</li>");
}
document.write("</ul>");