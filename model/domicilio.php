<?php
session_start();
class domicilio
{ //CREACIÓN DE VARIABLES DE LA CLASE USUARIO
	private $pdo;

	public $id;
	public $ubicacion;
	public $fechaPedido;
	public $horaPedido;
	public $pedid0;
	public $cantidad;
	public $instrucciones;
	public $pago;



	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp(); //SE CONECTA CON LA BASE DE DATOS    
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	//LISTA TODOS LOS USUARIOS
	public function Listar()
	{
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM pedidos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	//SELECCIONA UN ALUMNO EN PARTICULAR
	public function Obtener($id)
	{
		try {
			$stm = $this->pdo
				->prepare("SELECT * FROM pedidos WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	//FUNCIÓN PARA BORRAR UN ALUMNO POR ID
	public function Eliminar($id)
	{
		try {
			$stm = $this->pdo
				->prepare("DELETE FROM pedidos WHERE id  = ?");

			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	//FUNCIÓN PARA ACTUALIZAR. RECIBE UN ARRAY COMO PARAMETRO
	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE pedidos SET 
						ubicacion        = ?,
						fechaPedido          = ?, 
						horaPedido          = ?,
						pedid0  = ?,
						cantidad          = ?, 
						instrucciones            = ?,
						pago          = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ubicacion,
						$data->fechaPedido,
						$data->horaPedido,
						$data->pedid0,
						$data->cantidad,
						$data->instrucciones,
						$data->pago,

						$data->id
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	//ES LA FUNCIÓN QUE RECIBE LOS DATOS DEL CONTROLADOR PARA REGISTRAR
	public function Registrar(domicilio $data)
	{
		try {
			$sql = "INSERT INTO pedidos (ubicacion, fechaPedido , horaPedido , pedid0 , cantidad , instrucciones, pago ) 
		        VALUES ( ?, ?, ?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(

						$data->ubicacion,
						$data->fechaPedido,
						$data->horaPedido,
						$data->pedid0,
						$data->cantidad,
						$data->instrucciones,
						$data->pago



					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}