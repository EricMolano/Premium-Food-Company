<?php 

if (empty($_SESSION["id"])) {

      //  require_once 'view/header.php';
        require_once 'view/login.php';
     //   require_once 'view/footer.php';

    exit();
}
 ?>
<head>
<meta charset="utf-8" />
 <link rel="stylesheet" href="assets2/css/bootstrap.min.css" />
 <link rel="stylesheet" href="assets2/css/bootstrap-theme.min.css" />
 <link rel="stylesheet" href="assets2/js/jquery-ui/jquery-ui.min.css" />
 <link rel="stylesheet" href="assets2/css/style.css" />
 <link rel="stylesheet" href="assets2/css/estilos.css" />
 <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head> 
<h1 class="page-header">Producto</h1>
<h2 class="page-header">
    <?php echo $alm->id != null ? $alm->nomp : 'Nuevo Producto'; ?><!--PREGUNTA SI EL ID ES DIFERENTE DE NULL, DE SER ASÍ MUESTRA EL NOMBRE DEL ALUMNO QUE SE ESTÁ EDITANDO, EN CASO CONTRARIO MUESTRA LA PALABRA Nuevo Registro--->
</h2>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Producto</a></li><!--LLAMA AL CONTROLADOR USUARIOS--->
  <li class="active"><?php echo $alm->id != null ? $alm->nomp : 'Nuevo Producto'; ?></li>
</ol>

<form id="frm-Producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data"><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO USUARIO.CONTROLLER.PHP Y ESTE A LA FUNCION GUARDAR DE ESE ARCHIVO --->
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" /><!--LA CLAVE PRINCIPAL ESTÁ OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $alm--->
    

   
    <div class="form-group">
        <label>Nombre de producto</label>
        <input type="text" name="nomp" value="<?php echo $alm->nomp; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" required/>
    </div>
    
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $alm->categoria; ?>" class="form-control" placeholder="Ingrese su Categoria" data-validacion-tipo="requerido|min:5" required/>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingrese su Descripcion" data-validacion-tipo="requerido|min:3" required/>
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" placeholder="Ingrese su Precio" data-validacion-tipo="requerido|min:2" required/>
    </div>
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>


</form>
<!--FUNCIÓN DE VALIDACIÓN DE ESTE FORMULARIO--->
<script>
    $(document).ready(function(){
        $("#frm-Producto").submit(function(){
            return $(this).validate();
        });
    })
</script>