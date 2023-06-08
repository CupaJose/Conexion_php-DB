<?php
    $include = include(".\config.php");
    $con = connect();

    if($include && $con)
    {
        $ID_USUARIO = 1;
        $descripcion = "'Descripcion nueva'";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 1;
        $n_comentarios = 3;
        $n_retuits = 5;

        $peticion = "INSERT INTO publicacion VALUES (0, 1, $descripcion, '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
        $query = mysqli_query($con, $peticion);
        var_dump($query);

        // tipo que regresa info
        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con,$sql);
        // var_dump($query);
        // 

        // $datos = mysqli_fetch_array($query);
        // da la informacion en un arreglo tanto numerico como asociativo
        // $datos = mysqli_fetch_assoc($query);
        // de la informacion de un arreglo da las localidades asociativas 
        // var_dump($datos);
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // $datos = mysqli_fetch_assoc($query);
        // var_dump($datos); 
        // si no hay registros manda un buleano falso, si hay muestra la informacion
        while($row=mysqli_fetch_assoc($query))
        {
            var_dump($row);
            echo "<br><br><br>";
            // var_dump($row["descripcion"]);
        }
    }
?>