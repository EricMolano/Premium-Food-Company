<?php
require_once 'model/pedido.php';
//LAS FUNCIONES DENTRO DEL CONTROLADOR SON LAS QUE PERMITEN SABER QUÉ SE VA A MOSTRAR AL USARIO
class PedidoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Pedido();
    }
    //PRIMERA PÁGINA QUE CARGA
    public function Carga()
    {

        require_once 'view/pedido/pedido.php';

    }
    //LLAMA A LA ´VISTA USUARIO-EDITAR
    public function Crud()
    {
        $alm = new Pedido();

        if (isset($_REQUEST['id'])) {
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        //require_once 'view/header.php';
        require_once 'view/pedido/pedido-editar.php';
        //require_once 'view/footer.php';
    }
    //REGISTRA EL USUARIO Y VUELVE A INDEX
    public function Guardar()
    {$alm = new Pedido();
        $alm->ubicacion = $_REQUEST['ubicacion'];
        $alm->fechaPedido = $_REQUEST['fechaPedido'];
        $alm->horaPedido = $_REQUEST['horaPedido'];
        $alm->pedid0 = $_REQUEST['pedid0'];
        $alm->cantidad = $_REQUEST['cantidad'];
        $alm->instrucciones = $_REQUEST['instrucciones'];
        $alm->pago = $_REQUEST['pago'];
        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm); //SI EL VALOR DE ID ES MAYOR A CERO ES PORQUE USARÁ LA FUNCIÓN ACTUALIZAR, DE LO CONTRARIO USARÁ REGISTRAR DE LA VARIABLE alm

        //require_once 'view/header.php';
        require_once 'view/pedido/pedido.php';
        //require_once 'view/footer.php';
    }
    //LLAMA A ELIMINAR DEL ARCHIVO ALUMNO.PHP DE LA CARPETA MODEL
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        //header('Location: index.php');
        // require_once 'view/header.php';
        require_once 'view/pedido/pedido.php';
        //  require_once 'view/footer.php';
    }
}