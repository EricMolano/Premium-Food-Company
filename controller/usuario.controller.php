<?php
require_once 'model/usuario.php';

class UsuarioController {
    private $model;

    public function __construct() {
        $this->model = new Usuario();
    }
// En el controlador UsuarioController
public function Carga() {
    
    $rol = $_SESSION['rol'];
    $pageTitle = "Título de la página";

    // Verifica el rol y carga los datos del usuario si es necesario
    $userData = null;

    if ($rol === 'usuario' || $rol === 'domiciliario') {
        // Usuario normal o domiciliario: Muestra solo sus propios datos
        $userData = $this->model->Obtener($_SESSION['id']);
    } elseif ($rol === 'administrador') {
        // Administrador: Muestra todos los datos
        $userData = $this->model->Listar();
    }

    // Ahora pasamos todas las variables a la vista
    require_once 'view/usuario/usuario.php';
    }

    public function Crud() {
        $alm = new Usuario();
        
        if (isset($_REQUEST['id'])) {
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/usuario/usuario-editar.php';
    }

    public function Guardar() {
        $alm = new Usuario();
        
        $alm->id = $_REQUEST['id'];
        $alm->usuario = $_REQUEST['usuario'];
        $alm->contraseña = $_REQUEST['contraseña'];
        $alm->rol = $_REQUEST['rol'];
           
        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        require_once 'view/usuario/usuario.php';
    }

    public function Eliminar() {
        if (isset($_REQUEST['id'])) {
            $this->model->Eliminar($_REQUEST['id']);
            header('Location: index.php?c=Usuario&mensaje=Usuario eliminado correctamente');
        } else {
            header('Location: index.php?c=Usuario&error=ID de usuario no válido');
        }
    }
}
?>