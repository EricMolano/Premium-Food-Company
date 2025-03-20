<?php 


if(empty($_SESSION["id"])) {

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
<h1 class="page-header">Informacion</h1>
<h2 class="page-header">
    <?php echo $alm->id != null ? $alm->id : 'Nuevo Registro'; ?><!--PREGUNTA SI EL ID ES DIFERENTE DE NULL, DE SER ASÍ MUESTRA EL NOMBRE DEL ALUMNO QUE SE ESTÁ EDITANDO, EN CASO CONTRARIO MUESTRA LA PALABRA Nuevo Registro--->
</h2>

<ol class="breadcrumb">
  <li><a href="?c=Usuario">Usuario</a></li><!--LLAMA AL CONTROLADOR USUARIOS--->
  <li class="active"><?php echo $alm->id != null ? $alm->id : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />

    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="usuario" value="<?php echo $alm->usuario; ?>" class="form-control" placeholder="Ingrese su Usuario" data-validacion-tipo="requerido|min:5" required />
    </div>

    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contraseña" value="<?php echo $alm->contraseña; ?>" class="form-control" placeholder="Ingrese su contraseña" data-validacion-tipo="requerido|min:2" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-info">Guardar</button>
    </div>
</form>



</form>
<!--FUNCIÓN DE VALIDACIÓN DE ESTE FORMULARIO--->
<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>