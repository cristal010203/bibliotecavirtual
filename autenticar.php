<?php
include("conectar.php");


if (isset($_POST['email']) && isset($_POST['contraseña'])) {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT tipo_usuario_id FROM usuario WHERE email = '$email' AND contraseña = '$contraseña' LIMIT 1";
    $result = mysqli_query($conect, $query);

    if ($row = mysqli_fetch_assoc($result)) {
    
        if ($row['tipo_usuario_id'] == 1) {
            
            header('Location: registro.php');
         }
    } else {
        header('Location: login.php?error=login_invalido');
        exit();
    }
}
   
?>