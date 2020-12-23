<html>
<head><title>Problema</title></head>
<body>
    <?php
    $archivo=fopen("Pedidos.txt","r")or die("No se pudo");
    while(!feof($archivo)){
        $linea=fgets($archivo);
        $lineasalto=nl2br($linea);
        echo $lineasalto;
    }
    fclose($archivo);
    ?>
</body> 
</html>