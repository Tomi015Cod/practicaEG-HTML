<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabla ABML de ciudades</title>
</head>
<body>
    <?php
        include("ciudadesConect.php");

        $Cant_por_Pag = 5;
        $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
        if (!$pagina) {
        $inicio = 0;
        $pagina=1;
        }
        else {
        $inicio = ($pagina - 1) * $Cant_por_Pag;
        }

        $obtCiudad="SELECT * FROM ciudades";
        $ciudades= mysqli_query($link, $obtCiudad);
        $totRegist= mysqli_num_rows($ciudades);

        $total_paginas = ceil($total_registros/ $Cant_por_Pag);
        echo "Numero de registros encontrados: " . $total_registros . "<br>";
        echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";        

        $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);    
    ?>
    <table>
        <tr>
            <td><b>Id</b></td>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>TieneMetro</b></td>
        </tr>
        <?php
        while($ciudad = mysqli_fetch_array($vResultado))
            {
        ?>
        <tr>
            <td><?php echo ($ciudad['id']); ?></td>
            <td><?php echo ($ciudad['ciudad']); ?></td>
            <td><?php echo ($ciudad['pais']); ?></td>
            <td><?php echo ($ciudad['habitantes']); ?></td>
            <td><?php echo ($ciudad['superficie']); ?></td>
            <td><?php echo ($ciudad['tieneMetro']); ?></td>
        </tr>
        <tr>
         <td colspan="5"> 
        <?php
            }
            mysqli_free_result($vResultado);
            mysqli_close($link);
        ?>
        </td>
        </tr>
    </table>
    <?php 
    if ($total_paginas > 1){
    for ($i=1;$i<=$total_paginas;$i++){
    if ($pagina == $i)
    //si muestro el índice de la página actual, no coloco enlace
    echo $pagina . " ";
    else
    echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}
    ?>
    <p>&nbsp;</p>
    <p><a href="Menu.html">Volver al men&uacute; del ABM</a></p>
    
    
</body>
</html>