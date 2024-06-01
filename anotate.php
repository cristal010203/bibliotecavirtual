<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "biblioteca";

    $conect = mysqli_connect("localhost", "root", "", "bivirtual")
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
     body {
    background-image:url('libro.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial Rounded ;
    color: white;
    line-height: 1.;
 }
    form {
  /* Centrar el formulario en la página */
  margin: 0 auto;
  width: 400px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
  font-family: Arial Rounded ;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  font-family: Arial Rounded ;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Tamaño y alineación uniforme */
  display: inline-block;
  width: 90px;
  text-align: right;
 
}

input,
textarea {
  /* Para asegurarse de que todos los campos de texto tienen la misma configuración de letra
     Por defecto, las áreas de texto tienen un tipo de letra monoespaciada */
  font: 1em sans-serif;

  /* Tamaño uniforme del campo de texto */
  width: 300px;
  box-sizing: border-box;

  /* Hacer coincidir los bordes del campo del formulario */
  border: 1px solid #999;
  width: calc(75% - 3px); 
padding: 14px 20px; 
margin: 3px 0;
height: 50px;
border: 3px solid #4172f7;
border-radius: 19px;
box-sizing: border-box;
font-size: 14px;
}

input:focus,
textarea:focus {
  /* Destacado adicional para elementos que tienen el cursor */
  border-color: #000;
  
}

input[type=text], select {
  border: 1px solid #999;
  width: calc(75% - 5px); 
padding: 14px 20px; 
margin: 3px 0;
height: 50px;
border: 3px solid #4172f7;
border-radius: 19px;
box-sizing: border-box;
font-size: 14px;
   }

   input[type=submit] {
  width: 45%;
  height: 45px;
  background-color: white;

  border: 3px solid #4172f7;
  border-radius: 19px;
  box-sizing: border-box;

  color: black;
  padding: 14px 20px;
  margin: 8px 0;

  cursor: pointer;
  font-size: 15px;
  
}

    a {
 
 
 background-color: #B4AC26;
 color: black;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 
  }
  
  body {
    background-image:url('libro.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial Rounded ;
    color: white;
    line-height: 1;

    }

    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-3x {
font-size: 3em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}
a {
 
 
 background-color: #B4AC26;
 color: black;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 
  }

  .main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#f8f6f6;
font-family: arial;
font-size: 14px;
text-decoration:none;

-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Times new roman', sans-serif;
}




.s{
    font-family: TIMES NWE ROMAN;
font-size: 50px;  
width:0px;
height:0px;
margin: 40px;
}
.e{
    
    height:0px;
margin: 0px;
position: right;
right: 0%;
}
.r{
    height:0px;
margin: 0px; 
}


</style>
<section class="e">
<div class="area1"></div><nav class="main-menu">
            <ul>
                
                <li> 
                    <a href="index.php">
                        <i class="fa fa-home fa-3x"></i>
                        <span class="nav-text">
                           HOME 
                        </span>
                    </a>
                    
</li>
</section>

<br>
<br>
<br>

<form action="#" method="post">
  <ul>
  <center><h4> REGISTRATE </h4></center>
    <li> 
      <label for="carnet">No. de Carnet:</label>
      <input type="carnet" id="carnet" name="carnet" />
    </li>
    <li> 
      <label for="nombre">Nombre completo:</label>
      <input type="nombre" id="nombre" name="nombre" />
    </li>
    <li>
      <label for="direccion">Dirección:</label>
      <input type="direccion" id="direccion" name="direccion" />
    </li>
        <label for="instituto">Instituto:</label>
      <input type="instituto" id="instituto" name="instituto" />
       
    </li>
    <li>
      <label for="carrera">Carrera:</label>
      <input type="carrera" id="carrera" name="carrera" />
    </li>
    <li>
      <label for="telefono">No. Teléfono:</label>
      <input type="telefono" id="telefono" name="telefono" /><br>
      <center> (Asegúrate que tu número tenga cuenta en whatsApp) </center>
    </li>
    <br>
    <center> <input type="submit" name="conectar" value="GUARDAR"></center>
  </ul>
</form>
</br>
</br>
</br>

</html>



<?php 
    include("conectar.php");

    if (isset($_POST['conectar'])) {
        if (strlen($_POST['carnet']) >=1 && strlen($_POST['nombre']) >=1 && strlen($_POST['direccion']) >=1 && strlen($_POST['instituto']) >=1 && strlen($_POST['carrera']) >=1 && strlen($_POST['telefono']) >=1) {
            
            $carnet = trim($_POST['carnet']);
            $nombre = trim($_POST['nombre']);
            $direccion = trim($_POST['direccion']);
            $instituto = trim($_POST['instituto']);
            $carrera = trim($_POST['carrera']);
            $telefono = trim($_POST['telefono']);

            $query_registro = "INSERT INTO bivirtual.registro(carnet,nombre,direccion,instituto,carrera,telefono) VALUES ('$carnet', '$nombre', '$direccion', '$instituto', '$carrera', '$telefono')";
            $resultado_registro = mysqli_query($conect, $query_registro);

            if ($resultado_registro){

              // echo "<center><h3>¡Se guardó correctamente!</h3></center>";
               //header("refresh:2; url=index.php?nuevo=registro");
               //exit();
               echo '<script>
               Swal.fire({
                 title: "¡Registrado exitosamente!",
                 text: "Da click en OK",
                 icon: "success"
               });
               </script>' . '<meta http-equiv="refresh" content "7; url=?">';
           } else {
               //echo "<<center>h3>Ocurrió un error al guardar el cliente, por favor vuelva a intentarlo</h3></center>";
               //header("refresh:2; url=index.php?nuevo=registro");
               //exit();
           }
       } else {
           //echo "<center><h3>Es obligatorio llenar todos los campos</h3></center>";
           //header("refresh:2; url=index.php?nuevo=registro");
               //exit();
               echo '<script>
               Swal.fire({
                 title: "¡Opss...!",
                 text: "Ocurrió un error",
                 icon: "error"
               });
               </script>' . '<meta http-equiv="refresh" content "7; url=?">';
       }
  }
      