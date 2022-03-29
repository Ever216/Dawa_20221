<?php
    if(isset($_POST['Login'])){
        session_start();
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $server = "localhost";
        $user = "user1";
        $pass = "12345";
        $basedatos = "ag_autos";
        //Conectar al manejador de BD
        $conn = mysqli_connect($server, $user, $pass) or die("Error: No se pudo conectar");
        //establecer conexion con BD
        mysqli_select_db($conn, $basedatos) or die("Error no se ha encontrado la base de datos");
        //Consulta SQL que muestra el contenido de una tabla
        $query = mysqli_query($conn,"SELECT tipo_usuario FROM usuarios WHERE correo_usuario = '$email' and pass_usuario = '$psw'");
        //Ejecutar la consulta
        $query = $query->fetch_array();
        //$resultado = mysqli_query($conn,$query) or die ("Error:No se pudo ejecutar la consulta");
        if($query != null){
            $resultado = intval($query[0]);
            switch ($resultado) {
                case '1':
                    header("location:../MenusHtml/MenuAdministrador.html");
                    break;
                case '2':
                    header("location:../MenusHtml/MenuCliente.html");
                    break;
                case '3':
                    header("location:../MenusHtml/MenuVendedor.html");
                    break;
                case '4':
                    header("location:../MenusHtml/MenuAsesor.html");
                    break;
                default:
                    echo "<p>Usuario irreconocido</p>";
                    break;
            }
        }else{
            header("location:../MenusHtml/indexi.html");
        }
    }
?>