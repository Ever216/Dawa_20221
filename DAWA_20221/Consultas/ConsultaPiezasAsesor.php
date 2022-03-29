<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../cdnjs/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.6.0.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Made with love by Mutiullah Samim -->
   <!--Bootsrap 4 CDN-
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../Styles/Styles.css">
<body>

 <!--menu-->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-sm navbar-dark bg-black py-0 px-0"> <a class="navbar-brand"  href="#"><img id="logo" src="../img/img_log.jpg"> &nbsp;&nbsp;&nbsp;NombreAgencia</a><span class="v-line"></span> 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class=" navbar-nav nav nav-pills sm-3 " id="pills-tab" >
                    <li class="nav-item"> <a  class="nav-link" href="../MenusHtml/MenuAsesor.html">Inicio</a> </li>
                    <li class="nav-item active"> <a class="nav-link" href="../Consultas/ConsultaPiezasAsesor.php">Info. Piezas</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../Consultas/ConsultaVehiculosAsesor.php">Info. Vehiculos</a> </li>
                    <li class="nav-item "> <a class="nav-link" href="../Consultas/Citas.php">Citas Agendadas</a> </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Realizar Venta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item" href="../Ventas/VenderPiezasAsesor.php">Venta Piezas</a>
                        <a class="dropdown-item" href="../Ventas/VenderVehiculosAsesor.php">Venta Vehiculos</a>
                        </ul>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="../Consultas/ConsultaFacturas.php">Info. Facturas</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../MenusHtml/index.html"> Cerrar sesion</a> </li>
                </ul>
            </div>
        </nav>
    </div>


            <br>
            <h1 class = "text-center text-light font-weight-bold">Inventario de Piezas</h1>
            
            <?php
               
                //echo "<h1 class = 'w3-blue'>Consulta de datos </h1>";
            // echo "<p class = ''>El numero de registros de piezas es: $num_registros</p>";
            echo"<div class='form-row justify-content-center h-100'>";
            echo"<div class='card consulta'>";
            echo"<div class='well well-sm card-body'>";
                //Crear la tabla HTML
                echo"<div class='table-responsive-lg'>";
                echo "<table border= '2' class='table table-hover table-dark text-center'>";
                echo "<thead>";
                echo "<tr><th>ID</th><th>Nombre de la pieza</th><th>Cantidad de piezas</th><th>Costo de la pieza</th><th>Numero de Serie</th>";
                echo"</thead>";
               
           
               
                
            echo"</div>";
            echo"</div>";
            echo"</div>";
            ?>


    </div>
</body>
</html>