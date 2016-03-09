<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cuestionario</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styes.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
    <div class="container">
    <div class="page-header">
      <br>
      <br>
    </div>
      <form action="crearUsuario.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombre(s)</label>
              <input type="text" class="form-control"  placeholder="&#128697; Nombre(s)" required name="nombre">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Apellido(s):</label>
              <input type="text" class="form-control"  placeholder="&#128697; Apellido(s)" required name="apellidos">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Edad:</label>
              <input type="number" class="form-control"  placeholder="&#35; Edad" required name="edad">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="&#64; Email" required name="email">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Habitación:</label>
              <input type="number" class="form-control" placeholder="&#35; Numero De Habitación" name="habitacion">
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Seleccione su pais:</label>
                <br>
                  <select name="pais" id="">
                 
                    <option value="1">Mexico</option>
                    <option value="2">E.U.A</option>
                    <option value="3">Spain</option>
                    <option value="4">Germany</option>
                    <option value="5">Italy</option>
                    <option value="6">England</option>
                    <option value="7">Canada</option>
                    <option value="8">Netherlands</option>
                    <option value="9">Belgium</option>
                    <option value="10">Japan</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Seleccione Idioma</label>
                  <select name="idioma" id="">
                    <option value="1">Español</option>
                    <option value="2">English</option>
                    <option value="3">French</option>
                    <option value="4">Italian</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label>Favor De Seleccionar Tu Hotel:</label>
               <select name="hotel" id="">
                 <option value="1">Royal Palace</option>
                 <option value="2">Blue Bay</option>
                 <option value="3">Princess</option>
                 <option value="4">Holiday Xpress</option>
               </select>
              </div>
            </div>
          </div>
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Fecha De Alta:</label>
                <input  type="date" placeholder="&#128197; Fecha De Alta" name="fecha">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Favor De Seleccionar Tu Agencia:</label>
                <select name="agencia" id="">
                  <option value="1">Vacaciones Baratas</option>
                  <option value="2">Viva Areobus</option>
                  <option value="3">ADO</option>
                  <option value="4">Vive Feliz</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Seleccione Su Tratamiento:</label>
                  <select name="tratamiento" id="">
                    <option value="1">Espalda Dorsal</option>
                    <option value="2">Masaje</option>
                    <option value="3">Cancer</option>
                    <option value="4">Problemas En La Rodilla</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Selecciona El Nombre De Tu Terapeuta:</label>
                  <select name="terapeuta" id="">
                  
                    <option value="1">Isabel</option>
                    <option value="2">Emanuel</option>
                    <option value="3">Alfredo</option>
                    <option value="4">Diana</option>
                  </select>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Antes De Iniciar La Sesión Tenia alguna de estas circunstancias: (seleccione solo una)</label>
                  <select name="circunstancia" id="">
                    <option value="1">Embarazo</option>
                    <option value="2">Problemas De Corazón</option>
                    <option value="3">Claustrofobia</option>
                    <option value="4">Dolor General</option>
                    <option value="5">Alergia</option>
                    <option value="6">Epilepsia</option>
                    <option value="7">Problemas De La Piel</option>
                    <option value="8">Cirugía Reciente</option>
                    <option value="9">Problemas O Lesión De La Espina Dorsal</option>
                    <option value="10">Diabetes</option>
                    <option value="11">Acne</option>
                    <option value="12">Otro</option>
                  </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Crear</button>
        </form>
      </div>
  </body>
</html>
    