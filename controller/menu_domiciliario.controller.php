<?php
session_start();

class menu_domiciliarioController 
{
    
    //PRIMERA PÁGINA QUE CARGA
    public function Carga(){
        //require_once 'view/header.php';

        // Verifica el rol del usuario y genera el código HTML del menú correspondiente
        $rol = $_SESSION['rol'];

        switch ($rol) {
            case 'usuario':
                $menu = '<a class="btn-menu" href="menu_usuario.php">Menú de usuario</a>';
                break;
            case 'domiciliario':
                $menu = '<a class="btn-menu" href="menu_domiciliario">Menú de domiciliario</a>';
                break;
            case 'administrador':
                $menu = '<a class="btn-menu" href="menu_administrador">Menú de administrador</a>';
                break;
        }

        //require_once 'view/footer.php';
    }
    }
?>