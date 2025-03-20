<?php
session_start();

class Login {
    private $pdo;

    public function __construct()
    {
        try
        {
            $this->pdo = Database::StartUp(); // Conecta con la base de datos
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function login($usuario, $contraseña, $rol) {
        $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE usuario = :UserU AND contraseña = :PasswordU AND rol = :RolU");
        $stm->bindParam(':UserU', $usuario);
        $stm->bindParam(':PasswordU', $contraseña);
        $stm->bindParam(':RolU', $rol);
        $stm->execute();
    
        if ($stm->rowCount() == 1) {
            $result = $stm->fetch();
    
            // Almacena el rol en la sesión
            $_SESSION['Nombre'] = $result["nombre"] . " " . $result['apellido'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['rol'] = $rol; // Usa el rol seleccionado en el formulario
    
            return $result['id'];
        }
        return false;
    }
    
}