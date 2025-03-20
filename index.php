<?php
require_once 'model/database.php';/*REQUIERE EL ARCHVIO DATABASE.PHP DEL MODELO*/

$controller = 'ingresar';/*A LA VARIABLE CONTROLLER LE DA EL VALOR DE INGRESAR*/

// Todo esta lógica hará el papel de un FrontController
if(!isset($_REQUEST['c']))/*REQUEST nos permite capturar variables enviadas desde formularios con los métodos GET o POST como un array.EN ESTE CASO PREGUNTA SI NO EXISTE UN CONTROLADOR PARA CARGAR QUE VIENE EN LA VARIABLE c*/
{
    require_once "controller/$controller.controller.php";/*REQUIERE EL ARCHIVO ingresar.controller.php de la carpeta controller*/
    $controller = ucwords($controller) . 'Controller';/*LA FUNCION UCWORDS CAMBIA A MAYÚSCULA LA PRIMERA LETRA DEL PARÁMETRO INCLUIDO*/
    $controller = new $controller;
    $controller->Carga(); //SI NO HAY CONTROLADOR LLAMA FUNCION INDEX   
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);//SE LE DA VALOR A LA VARIBLE controller VIENE EN LA VARIABLE c Y CON LA FUNCION STRTOLOWER PASA A MINÚSCULA TODA LA CADENA
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Carga';//AQUI PREGUNTA SI SE VA A CARGAR LA ACCIÓN QUE VIENE EN LA VARIABLE a O DE LO CONTRARIO LE ASIGNA index a la varible $accion
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";//DE ACUERDO AL VALOR CARGA EL CONTROLADOR QUE SE NECESITE
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}