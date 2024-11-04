<?php

    include("../../Resources/lib/connection.php");

    $buscador = $_GET["fecha"];
    $rol = $_GET["rol"];

    $sp = "call SP_GETLISTCITASEXCEL('$rol','$buscador%');";

    $query = mysqli_query($connection, $sp);

    if (!$query) {
        echo json_encode("problema");
    } else{
        $json = array();
        while($row = mysqli_fetch_array($query)){
            $json[] = array(
                "nombres_estudiante" => $row["nombres_usuario"],
                "apellidos_estudiante" => $row["apellidos_usuario"],
                "numero_cuenta" => $row["numero_cuenta_estudiante"],
                "fecha" => $row["fecha_cita"]
            );
        }

        $json_string = json_encode($json);
        echo $json_string;

    }

    cerrarConexion($connection);

?>
