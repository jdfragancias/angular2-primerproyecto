<?php
    /* conexion */
    $link = mysql_connect("mysql1.000webhost.com","a2572022_jd","dabaw.9319") or die ("<Problemas con la conexion");
    $db = mysql_select_db("a2572022_jd",$link) or die ("Problemas con la conexion");

    /* traer los datos */
    $nombres=$_REQUEST['nombres'];
    $apellidos=$_REQUEST['apellidos'];
    $ciudad=$_REQUEST['ciudad'];
    $celular=$_REQUEST['celular'];
    $email=$_REQUEST['email'];
    $observacion=$_REQUEST['observacion'];
    
    /* requerimientos */
    $req = (strlen($nombres)*strlen($apellidos)*strlen($ciudad)*strlen($celular)*strlen($email)
    *strlen($observacion)) or die ("<h2>no se han llenado todos los campos</h2>");
    
    /* insertar datos a BD */
    mysql_query("INSERT INTO contactenos VALUES ('','$nombres','$apellidos','$ciudad',
    '$celular','$email','$observacion')",$link) or die("<h2>error de envio</h2>");

    echo "index.html";

?>