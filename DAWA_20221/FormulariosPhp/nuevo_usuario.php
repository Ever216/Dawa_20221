<script type="text/javascript">
 function MiFuncionJS(){ 
    alert('Insertado con éxito');
    history.back();
    }
</script>

<?php
    if(isset($_POST['Registrar'])){
        $Nombre = $_POST['name'];
        $psw = $_POST['password'];
        $email = $_POST['email'];

        $server = "localhost";
        $user = "user1";
        $pass = "12345";
        $basedatos = "ag_autos";
        if($Nombre != "" || $psw != "" || $email != ""){
            //Conectar al manejador de BD
            $conn = mysqli_connect($server, $user, $pass) or die("Error: No se pudo conectar");
            //establecer conexion con BD
            mysqli_select_db($conn, $basedatos) or die("Error no se ha encontrado la base de datos");
            //Consulta SQL que muestra el contenido de una tabla
            $query = "INSERT INTO usuarios(nombre_usuario,pass_usuario,tipo_usuario,correo_usuario) VALUE('$Nombre','$psw','2','$email')";
            //Ejecutar la consulta
            $resultado = mysqli_query($conn,$query) or die ("Error: ¡Usuario ya existente!");
            echo "<script>";
            echo "MiFuncionJS();";
            echo "</script>";
        }else{
            echo "<p>Falto informacion</p>";
        }
    }
?>
