<?php
// obtener multiples productos, cantidad como parametro
function obtenerProductos($cantidad = 10)
{
    include 'db_conexion.php';
    try {
        $sql = "SELECT * FROM productos LIMIT $cantidad ";
        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}
// obtener producto con id
function obtenerProducto($id_producto)
{
    include 'db_conexion.php';
    try {
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id=$id_producto ";
        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        $e->getMessage();
    }
    return $resultado;
}
