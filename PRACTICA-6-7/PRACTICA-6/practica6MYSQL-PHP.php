<?php
//EJERCICIO 1:
//1-->  mysqli_connect (mysql_connect)
//2--> $hostname ,$nombreUsuario , $contraseña son los parametros necesarios de la funcion.
//3--> mysqli_select_db (mysql_select_db)
//4--> $nombreConexión, $nombreBaseDatos
//5--> esa funcion se utiliza para ejecutar consultas a la base de dato.
//6--> la funcion mysqli_query require los parametros: $nombreConexion, "Consulta aquí"
//7--> si la consulta esta mal escrita o la tabla no existe se ejecutara el codigo dentro del or die(). Tambien si se utiliza junto con mysqli_connect() para ejecutar si falla la conexion.
//8--> mysqli_error () Devuelve el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado. 

//9 Con el while ($fila = mysqli_fetch_array($vResultado)) consigue que se acomoden todos los registros obtenidos en la consulta 
//  almacenada en $vResultado luego muestra las filas en una tabla de html, libera la memoria a traves de mysqli_free_result y luego cierra la conexion con la base de datos con mysqli_close.
?>
