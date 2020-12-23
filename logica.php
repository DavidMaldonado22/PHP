<html>
<head><title>Problema</title></head>
<body>
    <?php
    $archivo=fopen("Pedidos.txt","a")or die
    ("Problema en la creacion");
    fputs($archivo,$_REQUEST['nombre']);
    fputs($archivo,"\n");
    fputs($archivo,$_REQUEST['domicilio']);
    fputs($archivo,"\n");
    if(isset($_REQUEST['jamonyqueso'])){
        fputs($archivo,"Jamon y queso - cantidad: ".$_REQUEST['cantjamonyqueso']);
        fputs($archivo,"\n");
    }
    if(isset($_REQUEST['peperoni'])){
        fputs($archivo,"Peperoni - cantidad: ".$_REQUEST['cantpeperoni']);
        fputs($archivo,"\n");
    }
    if(isset($_REQUEST['espanola'])){
        fputs($archivo,"Española - cantidad: ".$_REQUEST['cantespanola']);
        fputs($archivo,"\n");
    }
    fputs($archivo,"--------------------------------------");
    fputs($archivo,"\n");
    fclose($archivo);
    echo("El pedido se cargo correctamente");
    ?>
</body> 
</html>