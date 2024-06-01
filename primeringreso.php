<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="estilo4.css">    

</head>

<style>
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


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}



.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:right;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#f8f6f6;
font-family: TIMES NWE ROMAN;
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
width:100px;
font-family: 'sans-serif';
}

.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#000000;
}

*{
  margin: 1;
  padding: 0;
  
}

form {
  /* Centrar el formulario en la página */
  margin: 10px;
  width: 200px;
  /* Esquema del formulario */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
  font-family: Arial Rounded ;
  position: relative;
display: inline-block;

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
<style>
    
*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: Arial, Helvetica, sans-serif;


    
    background-repeat: no-repeat;
    background-size: cover;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

    .card:hover {
      background-color: rgb(0, 0, 0);
      color: white;
      cursor: pointer;
      transform: scale(1.03);
      transition: all 1s ease;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
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
<section>
<div class="main">

<!--cards -->

<div class="card">

<div class="image">
  <img src="estadistica.jpg">
</div>
<div class="title">
<h1>
INTRODUCCION A LOS SISTEMAS DE CÓMPUTO</h1>
</div>
<div class="des">
  <button onclick="location.href= 'intro.php'">Ingresar</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="conta.jpg">
</div>
<div class="title">
<h1> LOGICA DE SISTEMAS </h1>
</div>
<div class="des"> <br>
<br>
<br>
  <button onclick="location.href= 'logica.php'">Ingresar</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="compu.jpg">
</div>
<div class="title">
<h1>
CONTABILIDAD I</h1>
</div>
<div class="des"><br>
<br>
<br>
 
  <button onclick="location.href= 'contab.php'">Ingresar</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="audi.jpg">
</div>
<div class="title">
<h1>
METODOLOGIA DE LA INVESTIGACION </h1>
</div>
<div class="des">
  <BR>
  <button onclick="location.href= 'metodologia.php'">Ingresar</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="integrada.jpg">
</div>
<div class="title">
<h1>
DESARROLLO HUMANO Y PROFESIONAL </h1>
</div>
<div class="des">
  <br>
  <button onclick="location.href= 'desarrollo.php'">Ingresar</button>
</div>
</div>
<!--cards -->
</section>

</section>