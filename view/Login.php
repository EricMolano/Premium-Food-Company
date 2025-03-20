<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="view/css/Usuario.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <form id="frm-login" action="?c=Acceso&a=Carga" class="formulario" method="post" enctype="multipart/form-data">
        <div class="logo-container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>
        
        <h1 class="formulario__titulo">Bienvenido</h1>
        
        <div class="input-group">
            <input type="text" class="formulario__input" name="usuario" required placeholder=" ">
            <label class="formulario__label">Usuario</label>
        </div>
        
        <div class="input-group">
            <input type="password" class="formulario__input" name="contraseña" required placeholder=" ">
            <label class="formulario__label">Contraseña</label>
        </div>
        
        <div class="input-group">
            <select name="rol" class="formulario__input" required>
                <option value="" disabled selected hidden></option>
                <option value="administrador">Administrador</option>
                <option value="usuario">Usuario</option>
                <option value="domiciliario">Domiciliario</option>
            </select>
            <label class="formulario__label">Seleccionar rol</label>
        </div>
        
        <button type="submit" class="formulario__submit">Iniciar sesión</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#frm-login").submit(function(){
                return $(this).validate();
            });
            
            // Evita que el label se superponga si hay contenido
            $(".formulario__input").each(function() {
                if ($(this).val() !== "") {
                    $(this).siblings(".formulario__label").addClass("active");
                }
            });
        });
    </script>
</body>
</html>