<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $errores = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $precio = trim($_POST["precio"]);
    $cantidad = trim($_POST["cantidad"]);

        if(empty($nombre) && !empty($precio) && !empty($cantidad))
            array_push($errores, "El campo nombre está vacio");

        if($precio<0)
            array_push($errores, "El campo precio no puede ser menor que 0");

        if($cantidad<0)
            array_push($errores, "El campo cantidad no puede ser menor que 0");
    }
    ?>

     <form action="EXTRA1.php" method = "post">
        <?php 
        
        if (!empty($errores)){
            foreach($errores as $error){
                echo '<p style="color:red">'.$error.'</p>';
            }
        } 
            
        ?>
        <label for="nombre"> Nombre del producto:</label>
        <input type="text" name="nombre"><br><br>

        <label for="precio"> Precio:</label>
        <input type="number" step=".01" name="precio" required><br><br>

        <label for="cantidad"> Cantidad:</label>
        <input type="number" name="cantidad" required><br><br>

        <label for="socio"> Socio:</label>
        <input type="checkbox" name="socio"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>