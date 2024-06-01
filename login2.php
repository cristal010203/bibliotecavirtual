<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "bivirtual";

    $conect = mysqli_connect("localhost", "root", "", "bivirtual")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo2.css">
    <link rel="stylesheet" href="https://cdnjs.clou dflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    
</style>

<section>

<div class="login-box" id="login">
<div class="login-container" id="login">
    
<form action="autenticar.php" method="POST">
    
    <h2>Inicia sesión</h2>
    <div class="input-box">
        <span class="input-field"><ion-icon
        name="email"></ion-icon></span>
        <input type="text" class="input-field" id="floatingInpu" name="email" >
        <label>Email</label>
    </div>
    <div class="input-box">
        <span class="input-field"><ion-icon name="contraseña"></ion-icon></span>
        <input type="password" class="input-field" id="floatingpassword" name=contraseña>
        <label>Contraseña</label>
    </div>  
    <div class="input-box"> 
            <input type="text" class="input-field" placeholder="Tipo">
            <i class="bx bx-user"> <select class="form-control mb-3" id="roleSelect" name="role">
            <option value="admin">Administrador</option>
            
            </select></i>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
   
</form>
</div>
</section>
