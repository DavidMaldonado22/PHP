<html>
<head><title>Problema</title></head>
<body>
    <strong>Pedido de pizza</strong>
    <form action="logica.php" method="POST">
    <span>Ingrese su Nombre:</span><br>
    <input type="text" name="nombre"><br>
    <span>Ingrese su domicilio:</span><br>
    <input type="text" name="domicilio"><br>
    <span>Seleccione la pizza o pizzas que desea</span><br>
    <input type="checkbox" name="jamonyqueso">Jamon y queso
    <span> - Cantidad:</span><input type="number" name="cantjamonyqueso" size="2"><br>
    <input type="checkbox" name="peperoni">Peperoni
    <span> - Cantidad:</span><input type="number" name="cantpeperoni" size="2"><br>
    <input type="checkbox" name="espanola">Española
    <span> - Cantidad:</span><input type="number" name="cantpeperoni" size="2"><br>
    <input type="submit" value="Ordenar">
    </form>
</body>
</html>