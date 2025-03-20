<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="view/css/user.css/bootstrapmin.css" />
    <link rel="stylesheet" href="view/css/user.css/UsuarioI.css" />
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
    <h1><?php echo "Bienvenid@, " . $_SESSION['Nombre'] . "" ?></h1>
    <h2><?php echo $pageTitle; ?></h2>
    <p>Información personal y opciones para gestionarla. Aquí puedes acceder a tus datos de domicilio y elegir cómo deseas administrarlos.</p>

    <!-- Contenido del perfil de usuario, domiciliario o administrador -->
    <?php if ($rol === 'usuario' || $rol === 'domiciliario' || $rol === 'administrador') : ?>
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <?php if ($rol === 'administrador') : ?>
                    <th>Acciones</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if ($rol === 'administrador') : ?>
                <?php foreach ($userData as $user) : ?>
                    <tr>
                        <td><?php echo $user->usuario; ?></td>
                        <td><?php echo $user->contraseña; ?></td>
                        <td><?php echo $user->rol; ?></td>
                        <td>
                            <a class="btn btn-info" href="?c=Usuario&a=Crud&id=<?php echo $user->id; ?>">Editar</a>
                            <a class="btn btn-info" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&id=<?php echo $user->id; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td><?php echo $userData->usuario; ?></td>
                    <td><?php echo $userData->contraseña; ?></td>
                    <td><?php echo $userData->rol; ?></td>
                    <td>
                        <a class="btn btn-info" href="?c=Usuario&a=Crud&id=<?php echo $userData->id; ?>">Editar</a>
                        <a class="btn btn-info" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&id=<?php echo $userData->id; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>
<div class="well well-sm text-right">
 
</div>
</body>
</html>
