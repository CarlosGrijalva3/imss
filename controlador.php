<?php
    //echo "¡El controlador está funcionando!";
    if(isset($_POST['registro'])){
    $nu_der_hab = $_POST['nu_der_hab'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $t_sangre = $_POST['t_sangre'];
    $edad = $_POST['edad'];
    $especialidad = $_POST['especialidad'];
    $clave_lada = $_POST['clave_lada'];
    $numero = $_POST['numero'];
            
    //base de dato
    $servername = "localhost";
    $username = "id20354909_cdga";
    $password = "Cdga3454!";
    $dbname = "id20354909_eluwu";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar datos en la tabla 'IMSS'
    $sql = "INSERT INTO IMSS (nu_der_hab, nombre, apellidos, t_sangre, edad, especialidad, clave_lada, numero)
    VALUES ('$nu_der_hab', '$nombre', '$apellidos', '$t_sangre', '$edad', '$especialidad', '$clave_lada', '$numero')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
?>