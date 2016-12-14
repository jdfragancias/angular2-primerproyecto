<?php
    $jsonregistro = file_get_contents("index.php");
    
    $objetoregistro = json_decode($jsonregistro); 

    // configuracion de conexion a BD
    $servidorbd = "mysql1.000webhost.com";
    $nombrebd = "a2572022_jd";
    $usuariobd = "a2572022_jd";
    $clavebd = "dabaw.9319";

    // Conexion a la base de datos:
    $conn =new PDO("mysql:host=$servidorbd;dbname=$nombrebd",$usuariobd,$clavebd)
           or die ("error conectando a la BD");

    //preparacion del query
    $sql = "INSERT INTO contactenos (nombres,apellidos,ciudad,celular,email,observacion) 
    VALUES (:nombres,:apellidos,:ciudad,:celular,:email,:observacion)";
    
    $q = $conn->prepare($sql);

    //Ejecucion de query
    $q->execute(array(':nombres'=>$objetoregistro->nombres,
                      ':apellidos'=>$objetoregistro->apellidos,
                      ':ciudad'=>$objetoregistro->ciudad,
                      ':celular'=>$objetoregistro->celular,
                      ':email'=>$objetoregistro->email,
                      ':observacion'=>$objetoregistro->observacion;

    //cerrar conexion
    $conn = NULL;

    echo "Datos guardados con exito";
?>