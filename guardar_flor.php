<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include($_SERVER['DOCUMENT_ROOT'].'/clase/Floreria_Sistema/db.php');
    $nombre = strtoupper($_POST["nombre"]);
    $color = strtoupper($_POST["color"]);
    $precio = $_POST["precio"];
    $variedad = $_POST["variedad"];
    $procedencia = $_POST["procedencia"];
    $fecha_compra = $_POST["fecha_compra"];
    $descuento = $_POST["descuento"];

    $sentencia = $conexion->prepare("INSERT INTO flor (nombre, color, precio, variedad, procedencia, fecha_compra, descuento) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre, $color, $precio, $variedad, $procedencia, $fecha_compra, $descuento]); # Pasar en el mismo orden de los ?

    if($resultado === TRUE) {
        echo "La flor se registró correctamente";
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }
}
?>