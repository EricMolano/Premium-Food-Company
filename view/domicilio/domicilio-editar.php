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
<h1 class="page-header"> Editar</h1>
<h2 class="page-header">
    <?php echo $alm->id != null ? $alm->id : 'Nuevo pedido'; ?><!--PREGUNTA SI EL ID ES DIFERENTE DE NULL, DE SER ASÍ MUESTRA EL NOMBRE DEL ALUMNO QUE SE ESTÁ EDITANDO, EN CASO CONTRARIO MUESTRA LA PALABRA Nuevo Registro--->
</h2>

<ol class="breadcrumb">
    <li><a href="?c=domicilio">Domicilios</a></li><!--LLAMA AL CONTROLADOR USUARIOS--->
    <li class="active">
        <?php echo $alm->id != null ? $alm->id : 'Nuevo pedido'; ?>
    </li>
</ol>

<form id="frm-domicilio" action="?c=domicilio&a=Guardar" method="post" enctype="multipart/form-data">
    <!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO USUARIO.CONTROLLER.PHP Y ESTE A LA FUNCION GUARDAR DE ESE ARCHIVO --->
    <input type="hidden" name="id"
        value="<?php echo $alm->id; ?>" /><!--LA CLAVE PRINCIPAL ESTÁ OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $alm--->

       

        <div class="form-group">
    <label>Ingresa tu ubicación:</label>
    <input type="text" name="ubicacion" value="<?php echo $alm->ubicacion; ?>" class="form-control" required/>
</div>
<div class="form-group">
    <label>Fecha de tu pedido:</label>
    <input type="date" name="fechaPedido" value="<?php echo $alm->fechaPedido; ?>" class="form-control" required/>
</div>

<div class="form-group">
    <label>Hora de tu pedido:</label>
    <input type="time" name="horaPedido" value="<?php echo $alm->horaPedido; ?>" class="form-control" required/>
</div>

<div class="form-group">
    <label>¿Qué deseas?</label>
    <select name="pedid0"  value="<?php echo $alm->pedid0; ?>" class="form-control" required>
        <option value="pizza">Pizza</option>
        <option value="hamburguesa">Hamburguesa</option>
        <option value="pollo_frito">Pollo Frito</option>
        <option value="sushi">Sushi</option>
        <option value="tacos">Tacos</option>
        <option value="burritos">Burritos</option>
        <option value="hot_dogs">Hot Dogs</option>
        <option value="papas_fritas">Papas Fritas</option>
        <option value="alitas">Alitas</option>
        <option value="tortas">Tortas</option>
    </select>
</div>

<div class="form-group">
    <label>¿Qué cantidad deseas?</label>
    <input type="text" name="cantidad"  value="<?php echo $alm->cantidad; ?>" class="form-control" required  />

</div>

<div class="form-group">
    <label>Instrucciones especiales de tu pedido:</label>
    <input type="text" name="instrucciones" value="<?php echo $alm->instrucciones; ?>" class="form-control"/>
</div>

<div class="form-group">
    <label>¿Qué método de pago tienes?</label>
    <select name="pago" value="<?php echo $alm->pago; ?>" class="form-control" required>
        <option value="efectivo">Efectivo</option>
        <option value="tarjeta">Tarjeta de crédito</option>
        <option value="paypal">PayPal</option>
        <option value="transferencia">Transferencia bancaria</option>
        <!-- Agrega más opciones de pago según sea necesario -->
    </select>
</div>

    <hr />
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>


</form>
<!--FUNCIÓN DE VALIDACIÓN DE ESTE FORMULARIO--->
<script>
    $(document).ready(function () {
        $("#frm-domicilio").submit(function () {
            return $(this).validate();
        });
    })
</script>

<div class="form-group">
    <label>Precio Unitario</label>
    <span id="precio-unitario">$0.00</span>
</div>

<div class="form-group">
    <label>Total</label>
    <span id="total">$0.00</span>
</div>

<script>
    // Precios de cada comida
    const precios = {
        pizza: 10.00,
        hamburguesa: 5.00,
        pollo_frito: 8.00,
        sushi: 15.00,
        tacos: 7.00,
        burritos: 9.00,
        hot_dogs: 4.00,
        papas_fritas: 3.00,
        alitas: 12.00,
        tortas: 6.00,
    };

    // Función para actualizar el precio unitario y el total
    function actualizarPrecioYTotal() {
        const pedid0 = document.getElementById("pedid0").value;
        const cantidad = parseFloat(document.getElementById("cantidad").value);
        const precioUnitario = precios[comidaSeleccionada];
        const total = precioUnitario * cantidad;

        document.getElementById("precio-unitario").textContent = "$" + precioUnitario.toFixed(2);
        document.getElementById("total").textContent = "$" + total.toFixed(2);
    }

    // Agregar oyentes de eventos para los cambios en la comida y la cantidad
    document.getElementById("pedid0").addEventListener("change", actualizarPrecioYTotal);
    document.getElementById("cantidad").addEventListener("input", actualizarPrecioYTotal);

    // Actualizar el precio y el total en la carga inicial
    actualizarPrecioYTotal();
</script>

