<?php
session_start();
class Producto
{	//CREACIÓN DE VARIABLES DE LA CLASE USUARIO
	private $pdo;
    
    public $id;
    public $nomp;
    public $categoria;
	public $descripcion;
	public $precio;

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

			$stm = $this->pdo->prepare("SELECT * FROM productos");
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
			          ->prepare("SELECT * FROM productos WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM productos WHERE id = ?");			          

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
			$sql = "UPDATE productos SET 
					
						nomp        = ?,
                    
						categoria  = ?,
						descripcion        = ?,
						precio            = ?


				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                     
                    
                        $data->nomp,
                        $data->categoria,
						$data->descripcion,
						$data->precio,
					    $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	//ES LA FUNCIÓN QUE RECIBE LOS DATOS DEL CONTROLADOR PARA REGISTRAR
	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO productos ( nomp,categoria,descripcion,precio) 
		        VALUES ( ?,?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
			      
                        $data->nomp,
                        $data->categoria,
						$data->descripcion,
						$data->precio

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}