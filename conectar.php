
<?php
    //$conect = mysqli_connect("servidor", "nombreUsuarioBD", "contraseñaBD", "nombreBD");
    $conect = mysqli_connect("localhost", "root", "", "bivirtual" );
    if(!$conect)

    die("parece que la pagina no esta funcionando correctamente")
?>