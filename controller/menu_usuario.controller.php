<?php
session_start();

class menu_usuarioController 
{
    //PRIMERA PÁGINA QUE CARGA
    public function Carga(){
        // Verifica el rol del usuario y genera el código HTML del menú correspondiente
        $rol = $_SESSION['rol'];

        switch ($rol) {
            case 'usuario':
                $menu_usuario = '<a class="btn-menu_usuario" href="menu_usuario.php">Menú de usuario</a>';
                break;
            
        }

        // Devuelve la variable para que pueda ser impresa en la plantilla HTML
        return $menu_usuario;
    }
}
?>