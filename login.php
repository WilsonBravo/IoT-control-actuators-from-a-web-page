<?php

session_start();

if(isset($_SESSION['user_id'])){
   header('location: /GUIprivada.php');
}

require 'database.php';
if(!empty($_POST['email'])&&!empty($_POST['password'])){
    $records=$conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email',$_POST['email']);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);

    $message='';

    if(count(array($results))>0 && password_verify($_POST['password'],$results['password'])){
      $_SESSION['user_id']=$results['id'];
      header("location: /GUIprivada.php");

    }else{
        $message='Lo siento, sus credenciales no coinciden';
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicia sesión</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
    <p><?=$message?></p>
<?php endif ?>

<h1>Inicia sesión</h1>
<span>o <a href="signup.php">Registrate</a></span>

<form action="login.php" class="formulario" id="formulario" method="POST">
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
        
    </div>

    <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b>Por favor rellene el formulario correctamente</p>
    </div>


    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente</p>
    </div>

</form>
    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>