<?php

if (empty($_SESSION["id"])) {

    //require_once 'view/header.php';
    require_once 'view/login.php';
    // require_once 'view/footer.php';

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
<h1 class="page-header"> Domicilios</h1>

    <div class="well well-sm text-right">
        <a class="btn btn-info" style="width:300px" ; href="view/Rep.php"> Generar Reporte PDF</a>
    </div>
<div class="well well-sm text-right">
    <a class="btn btn-info"
        href="?c=Menu">Menú</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO USUARIO.CONTROLLER.PHP Y ESTE A LA FUNCION CRUD DE ESE ARCHIVO QUE NECESITA DE HEADER, USUARIO-EDITAR Y FOOTER--->
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">Direccion.</th>
            <th style="width:180px;">Fecha. </th>
            <th style="width:100px;">Hora. </th>
            <th style="width:100px;">Nombre.</th>
            <th style="width:100px;">Cantidad.</th>
            <th style="width:60px;">Instrucciones especiales de pedido.</th>
            <th style="width:60px;">Metodo de pago.</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r): /*LA VARIABLE model ESTÁ EN EL CONTROLADOR  Y CREA UNA INSTANCIA DE LA CLASE USUARIO Y SU VEZ LLAMA A LA FUNCION LISTAR DE USUARIO.PHP DE LA CARPETA MODEL*/?>
        <tr>

            <td>
                <?php echo $r->ubicacion; ?>
            </td>

            <td>
                <?php echo $r->fechaPedido; ?>
            </td>
            <td>
                <?php echo $r->horaPedido; ?>
            </td>
            <td>
                <?php echo $r->pedid0; ?>
            </td>
            <td>
                <?php echo $r->cantidad; ?>
            </td>
            <td>
                <?php echo $r->instrucciones; ?>
            </td>
            <td>
                <?php echo $r->pago; ?>
            </td>
            <td>
                <a class="btn btn-info" href="?c=domicilio&a=Crud&id=<?php echo $r->id; ?>">Editar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO ALUMNO.CONTROLLER.PHP Y ESTE A LA FUNCION CRUD DE ESE ARCHIVO QUE NECESITA DE HEADER, ALUMNO-EDITAR Y FOOTER--->
            </td>
            <td>
                <a class="btn btn-info" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=domicilio&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>