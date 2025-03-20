<?php
session_start();
class Usuario
{	//CREACIÓN DE VARIABLES DE LA CLASE USUARIO
	private $pdo;
    
    public $id;
	public $usuario;
    public $contraseña;
	public $rol;

   

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp(); //SE CONECTA CON LA BASE DE DATOS    
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	//LISTA TODOS LOS USUARIOS
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	//SELECCIONA UN ALUMNO EN PARTICULAR
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	//FUNCIÓN PARA BORRAR UN ALUMNO POR ID
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	//FUNCIÓN PARA ACTUALIZAR. RECIBE UN ARRAY COMO PARAMETRO
	public function Actualizar($data)
	{
		try 
		{
			$sql =  "UPDATE usuario SET
					usuario    =?,
					contraseña  =?,
					rol =?
					
				  WHERE id = ?";
				 
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->usuario,
                        $data->contraseña,
						$data->rol,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	//ES LA FUNCIÓN QUE RECIBE LOS DATOS DEL CONTROLADOR PARA REGISTRAR
	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = 
"INSERT INTO usuario (  usuario, contraseña, rol)
VALUES (?, ?, ? )";


		$this->pdo->prepare($sql)
		     ->execute(
				array(
			    	$data->usuario,
					$data->contraseña,
					$data->rol, 
					
				

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}