function login()
{

var nombre = document.getElementById('usuario').value;
var contraseña = document.getElementById('contraseña').value;
if (nombre =="paula" && contraseña =="123456")
{

var pag = location.replace("registrar.html");
alert(nombre+" BIENVENIDO AL SISTEMA");
}
else
{
alert("USUARIO INVALIDO");
}
//window.close("index.html");
}