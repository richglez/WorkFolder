

//VARIBALES
var nombre = "Ricardo";
var apellido = "Gonzalez";
var nombreCompleto = nombre +" "+ apellido;
var palabra1 = "Bienvendido, " + nombreCompleto;
alert(nombre);

document.open();
document.write("<h1>" + nombre + "</h1>");
document.write("<h1>" + apellido + "</h1>");
document.write("\n<h2>" + palabra1 + "</h2>");
document.write("<input type=\"text\" name=\"\" id=\"\">");
document.write("<input type=\"checkbox\" name=\"\" id=\"\">");
document.write("<input type=\"submit\" name=\"Enviar\" id=\"\">");

document.close();


//funciones
function click1() {
    alert("Haz hecho click en el texto");
}

function pasar() {
    alert('Pasando sobre el texto');
    
}