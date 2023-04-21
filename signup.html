<?php
    require 'database.php';

    $message='';
    
    if(!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['password2'])){
      $sql="INSERT INTO users(email, password)VALUES(:email,:password)";
      $stmt=$conn->prepare($sql);
      $stmt->bindParam(':email',$_POST['email']);
      $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password',$password);
    

    if($stmt->execute()){
        $message='Se ha creado tu usuario de manera satisfactoria';

    }else{
        $message='Lo siento, parece que hubo un problema creando tu usuario';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrate</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php require 'partials/header.php' ?>
<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>
<h1>Registrate</h1>
<span>o <a href="login.php">Inicia sesión</a></span>

<form action="signup.php" class="formulario" id="formulario" method="POST">

    <div class="formulario__email" id="grupo__email">
        
        <div class="formulario__grupo-input">
            <input type="email" class="formulario__input" name="email" id="email" placeholder="Ingresa tu correo electrónico">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error"> Debe ingresar un correo eletrónico valido</p>
    </div>

    <div class="formulario__password" id="grupo__password">
        
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password" id="password"placeholder="Ingresa tu contraseña">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error"> Ingrese una contraseña de acuerdo a los requerimientos</p>
    </div>

    <div class="formulario__password2" id="grupo__password2">
        
        <div class="formulario__grupo-input">
            <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Confirma tu contraseña">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error"> Ambas contraseñas tienen que ser iguales</p>
    </div>

    <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b>Por favor rellene el formulario correctamente</p>
    </div>

    <div>
        <button onclick="mostrar()" class="formulario__btn">requerimientos para la contraseña</button>
        <script type="text/javascript">
            function mostrar(){
        
                swal({
        
                    text:'• mínimo 8 caracteres y máximo 15 \n • una letra mayúscula \n • una letra minúscula \n • un dígito \n •un caracter especial',
                    icon:'success'
                
                });
        
            }
        </script>
    </div>

    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
    </div>

</form>
    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>