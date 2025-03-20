<?php
require_once 'model/login.php'; // Asegúrate de que la ruta sea correcta

class AccesoController {
    private $model;

    public function __construct() {
        $this->model = new login();
    }

	public function Carga() {
		if ($_POST) {
			$usuario = $_POST['usuario'];
			$contraseña = $_POST['contraseña'];
			$rol = $_POST['rol'];
			$entr = $this->model->login($usuario, $contraseña, $rol);
	
			if ($entr != false) {
				if ($rol == "administrador") {
					require_once 'view/menu_administrador.php';
				} elseif ($rol == "usuario") {
					require_once 'view/menu_usuario.php';
				} elseif ($rol == "domiciliario") {
					require_once 'view/menu_domiciliario.php';
				} else {
					// Rol seleccionado incorrecto, redirige nuevamente a la página de inicio de sesión
					require_once 'view/Login.php';
				}
			} else {
				require_once 'view/Login.php';
			}
		}
	}
}
