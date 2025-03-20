
<?php
require_once 'model/producto.php';
//LAS FUNCIONES DENTRO DEL CONTROLADOR SON LAS QUE PERMITEN SABER QUÉ SE VA A MOSTRAR AL USARIO
class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    //PRIMERA PÁGINA QUE CARGA
    public function Carga(){
        
        require_once 'view/Producto/producto.php';
       
    }
    //LLAMA A LA ´VISTA USUARIO-EDITAR
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        //require_once 'view/header.php';
        require_once 'view/Producto/producto-editar.php';
        //require_once 'view/footer.php';
    }
    //REGISTRA EL USUARIO Y VUELVE A INDEX
    public function Guardar(){
        $alm = new Producto();
        
        $alm->id = $_REQUEST['id'];
        $alm->nomp = $_REQUEST['nomp'];
        $alm->categoria = $_REQUEST['categoria'];
        $alm->descripcion= $_REQUEST['descripcion'];    
        $alm->precio = $_REQUEST['precio'];
         $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);//SI EL VALOR DE ID ES MAYOR A CERO ES PORQUE USARÁ LA FUNCIÓN ACTUALIZAR, DE LO CONTRARIO USARÁ REGISTRAR DE LA VARIABLE alm
        
        //require_once 'view/header.php';
        require_once 'view/Producto/producto.php';
        //require_once 'view/footer.php';
    }
    //LLAMA A ELIMINAR DEL ARCHIVO ALUMNO.PHP DE LA CARPETA MODEL
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
       //header('Location: index.php');
       // require_once 'view/header.php';
        require_once 'view/Producto/producto.php';
      //  require_once 'view/footer.php';
    }
}