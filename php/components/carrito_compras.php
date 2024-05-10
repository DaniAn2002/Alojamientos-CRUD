<?php
include_once("connection.php");
class CarritoCompras extends DB
{

    public function agregarProductoaCarrito($idAlojamiento)
    {
        $bd = $this->connect();
        $idSesion = session_id();
        $query = $bd->prepare("INSERT INTO reservas(reservacion_id,alojamiento_id) VALUES (?,?)");
        $query->bind_param('ii', $idSesion, $idAlojamiento);
        $query->execute();
    }

    public function obtenerIDProductoEnCarrito($idReservacion)
    {
        $bd = $this->connect();
        $query = $bd->prepare("SELECT alojamiento_id FROM reservas WHERE reservacion_id = ?");
        $query->bind_param('i', $idReservacion);
        $query->execute();

        $result = $query->get_result();

        $id = array();
        while ($row = $result->fetch_assoc()) {
            $id[] = $row['alojamiento_id'];
        }

        return $id;
    }

    public function obtenerProductosEnCarrito()
    {
        $bd = $this->connect();
        $query = $bd->prepare('SELECT alojamientos.alojamiento_id, alojamientos.nombre_hospedaje, alojamientos.ubicacion,
        alojamientos.tipo, alojamientos.costo_por_dia
        FROM alojamientos
        INNER JOIN reservas
        ON alojamientos.alojamiento_id = reservas.alojamiento_id
        WHERE reservas.reservacion_id = 1');
        $query->bind_param('i', $idReservacion);
        $query->execute();

        $result = $query->get_result();

        $producto = array();
        while ($row = $result->fetch_assoc()) {
            $producto[] = $row;
        }

        return $producto;
    }

    public function eliminarProductoDeCarrito($idAlojamiento, $idReservacion)
    {
        $bd = $this->connect();
        $query = $bd->prepare('DELETE FROM reservas WHERE reservacion_id = ? AND alojamiento_id = ?');
        $query->bind_param('ii', $idAlojamiento, $idReservacion);

        $query->execute();
    }
}
