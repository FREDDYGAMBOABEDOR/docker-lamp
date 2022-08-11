<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="PruebaFuniber.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <div>
        <img src="imagenes/logo-funiber.png" atl= "Franklin Gamboa" title=" logo-funiber" heigth="200px" width="200px">
    </div>
	<title >Solicitar información</title>
</head>
<body>
    <h1 id= "id-titulo">Solicitar información</h1>
<form  name="formulario"  action="index.php" method="post">
    

  <div class="row">
    <div class="col">
    	<label id="Nombres">Nombre</label>
      <input type="text" id="nombre"  name="nombre" required="Nombres" class="form-control" placeholder="First name">
    </div>
    <div class="col">
    	<label>Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" required="apellidos" class="form-control" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
    	<label>Correo Electronico</label>
      <input type="email"  id="email" name="email" required="email" class="form-control" placeholder="Email">
    </div>
    <div class="col">
    	<label>Telefono</label>
      <input type="number" id="telefono" name="telefono" required="numero"class="form-control" placeholder="Phone">
    </div>
  </div>

	<div class="row">
    <div class="col">
    	<p><label>País</label></p>
      	<select name="selectPaises" class="form-select" aria-label="Default select example" id="cmbPaises" onchange="cargarEstado(this);">
      		<!--option selected>Otros</option>
            <option value="value1">Ecuador</option>
            <option value="value2" selected>China</option>
            <option value="value3">Chile</option>
            <option value="4">España</option-->
            </select>
    </div>

  <div class="col">
      <p><label>Estado</label></p>
        <select name="selectEstado" class="form-select"  id="cmbEstado"  onchange="cargarCiudad(this);" aria-label="Default select example">
          
            </select>
    </div>


    <div class="col">
    	<p><label>Cuidad</label></p>
      <select name="selectCiudad" class="form-select" aria-label="Default select example" id="cmbCiudad" >
      		<!--option selected>Otros</option>
            <option value="value1">	Guayaquil</option>
            <option value="value2" selected>Cuenca</option>
            <option value="value3">Quito</option>
            <option value="4">Loja</option-->
            </select>
    </div>
  </div>

<!-- Estado-->


  <div class="row">
  
    <div class="col" >
    <p></p><label>Comentarios</label></p>
     <textarea class="form-control" name="Comentario" readonly""></textarea>
    </div>
  </div>


<div class="row">
    <div class="col">
    	<label>Comprobación de aceptación de póliza</label>
      <input type="text" name="Comprobacion" required="comprobacion" class="form-control" placeholder="Comprobación">
    </div>
    

    <div class="col">
    	
<div>
    	<label>Áreas</label>
      </div>
    <select class="custom-select form-select" name= "Area" aria-label="Default select example" id="cmbAreas"  onchange="cargarProgramas(this);" >
    <!--option selected disabled>Departamento de Medio Ambiente y Sostenibilidad</option>
    <option value="1">Máster Universitario en Gestión y Auditorías Ambientales</option>
 
    <option selected disabled>Departamento de Innovación, Empresa y Nuevas Tecnologías</option>
    <option value="1">Maestría en Dirección Estratégica con Mención en Gerencia</option>
    <option value="2">Maestría en Dirección Estratégica con Especialización en Tecnologías de la Información</option>
    <option value="3">Maestría en Dirección Estratégica con mención en Telecomunicaciones</option>
 
    <option selected disabled>Departamento de Ciencias del Lenguaje, Educación y Comunicación </option>
    <option value="1">Máster Universitario en Formación de Profesores de Español como Lengua Extranjera</option>
    <option value="2">Maestría en Educación con mención en Educación Superior</option>
    <option value="3">Maestría en Educación con especialidad en Organización y Gestión de Centros Educativos</option>

    <option selected disabled>Departamento de Ciencias de la Salud
    </option>
    <option value="1">Máster Universitario en Actividad Física: Entrenamiento y Gestión Deportiva
    </option>
    <option value="2">Maestría en Ciencias Naturopáticas</option>

    <option selected disabled>Departamento de Proyectos</option>
    <option value="1">Máster Universitario en Diseño, Gestión y Dirección de Proyectos</option>
    <option value="2">Maestría en Diseño, Dirección y Gestión de Proyectos con especialidad en Innovación y Productos</option>
    <option value="3">Maestría en Diseño, Dirección y Gestión de Proyectos con especialidad en Arquitectura y Urbanismo</option-->

    </select>

 </div>


 <div class="col">
      
<div>
      <label>Programas</label>
      </div>
    <select class="custom-select form-select" name="Programas" aria-label="Default select example" id="cmbProgramas">
    <!--option selected disabled>Departamento de Medio Ambiente y Sostenibilidad</option>
    <option value="1">Máster Universitario en Gestión y Auditorías Ambientales</option>
 
    <option selected disabled>Departamento de Innovación, Empresa y Nuevas Tecnologías</option>
    <option value="1">Maestría en Dirección Estratégica con Mención en Gerencia</option>
    <option value="2">Maestría en Dirección Estratégica con Especialización en Tecnologías de la Información</option>
    <option value="3">Maestría en Dirección Estratégica con mención en Telecomunicaciones</option>
 
    <option selected disabled>Departamento de Ciencias del Lenguaje, Educación y Comunicación </option>
    <option value="1">Máster Universitario en Formación de Profesores de Español como Lengua Extranjera</option>
    <option value="2">Maestría en Educación con mención en Educación Superior</option>
    <option value="3">Maestría en Educación con especialidad en Organización y Gestión de Centros Educativos</option>

    <option selected disabled>Departamento de Ciencias de la Salud
    </option>
    <option value="1">Máster Universitario en Actividad Física: Entrenamiento y Gestión Deportiva
    </option>
    <option value="2">Maestría en Ciencias Naturopáticas</option>

    <option selected disabled>Departamento de Proyectos</option>
    <option value="1">Máster Universitario en Diseño, Gestión y Dirección de Proyectos</option>
    <option value="2">Maestría en Diseño, Dirección y Gestión de Proyectos con especialidad en Innovación y Productos</option>
    <option value="3">Maestría en Diseño, Dirección y Gestión de Proyectos con especialidad en Arquitectura y Urbanismo</option-->

    </select>

 </div>
 </div>



<div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I accept the privacy policy
      </label>
    </div>
	
<div> <input type="submit" name="bntpers" class="btn btn-success" value="GUARDAR"/></div>
	
	
	
</form>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/funiber.js?v=6"></script>

<?php
if (isset($_POST['bntpers'] )  ) {
  
/*$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$numero = $_POST['numero']; */
$Nombres = isset($_POST['nombre']) ? $_POST['nombre'] : '-';
$Apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '-';
$Correo_Electronico=isset($_POST['email']) ? $_POST['email'] : '-';
$Telefono=isset($_POST['telefono']) ? $_POST['telefono'] : '-';
$Detalle_Pais=isset($_POST['selectPaises']) ? $_POST['selectPaises'] : '-';
$Detalle_Estado=isset($_POST['selectEstado']) ? $_POST['selectEstado'] : '-';
$Detalle_Ciudad=isset($_POST['selectCiudad']) ? $_POST['selectCiudad'] : '-';
$Comentarios=isset($_POST['Comentario']) ? $_POST['Comentario'] : '-';
$Comprobación_poliza=isset($_POST['Comprobacion']) ? $_POST['Comprobacion'] : '-';
$area=isset($_POST['Area']) ? $_POST['Area'] : '-';
$programa=isset($_POST['Programas']) ? $_POST['Programas'] : '-';

echo"<h2>Informacion recibida desde PHP</h2>";
echo "El nombre recibido es :". $Nombres. "<br/>";


$conn = mysqli_connect('db', 'root', 'test', "dbname");
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

else{


$sql = "INSERT INTO `Person`(`Nombres`, `Apellidos`, `Correo_Electronico`, `Telefono`,`Detalle_Pais`,`Detalle_Estado`,`Detalle_Cuidad`, `Comentarios`, `Comprobación_poliza`,`area`, `programa`) VALUES ('".$Nombres."','".$Apellidos."','".$Correo_Electronico."','".$Telefono."','".$Detalle_Pais."','".$Detalle_Estado."','".$Detalle_Ciudad."','".$Comentarios."','".$Comprobación_poliza."','".$area."','".$programa."')";		
echo $sql;					 					
$result = mysqli_query($conn, $sql);
	/*require_once("conexion-db.php");
    $connexion = new Conexion();  
	$rspta=$connexion->registrar($Nombres, $Apellidos, $Correo_Electronico, $Telefono, $Id_Pais, $Detalle_Pais,
$Id_Estado, $Detalle_Estado, $Id_Cuidad,
$Detalle_Ciudad, $Comentarios, $Comprobación_poliza, $area, $programa);
	  print_r($rspta);*/
} 
}
?>

