<?php
require_once "ConexionDB.php";
class generalDaoImpl extends ConexionDB
{
    private $conxion;
    public function __construct()
    {
        $this->conexion = ConexionDB::conectar();
    }
    //tabla cliente
    public function listarCliente()
    {
       $stmt = $this->conexion->prepare("SELECT id, nombre, tipo_documento, telefono, direccion FROM cliente ORDER BY id");
       $stmt->execute();
       $stmt->bindColumn("id",$id); 
       $stmt->bindColumn("nombre",$nombre);
       $stmt->bindColumn("tipo_documento",$tipo_documento);
       $stmt->bindColumn("telefono",$telefono);
       $stmt->bindColumn("direccion",$direccion);
       return $stmt->fetchAll();
       $stmt->close();
    }
    ////////////////bonn
    public function insertarCliente($nombre,$tipo_documento,$telefono,$direccion)
    {
        $sql = "INSERT INTO cliente(nombre, tipo_documento, telefono, direccion) VALUES (:nombre, :tipo_documento, :telefono, :direccion)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt->bindparam(':tipo_documento',$tipo_documento,PDO::PARAM_STR);
        $stmt->bindparam(':telefono',$telefono,PDO::PARAM_INT);
        $stmt->bindparam(':direccion',$direccion,PDO::PARAM_STR);
        if($stmt->execute()){
            echo "<font color='green'>Registro Agregado Correctamente. <br/>";
            echo "Cantidad de Registros Agregados: ".$stmt->rowCount()."<br/>";
        }else{
            echo "No se pudo hacer el registro";
        }
        echo "<br/><a href='listarCliente_p1.php'>Volver</a>";
    }
    
    public function eliminarCliente($id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM cliente WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        if ($stmt->execute(array(':id' => $id))){
            echo "<font color='red'>Cliente Eliminado Correctamente. <br/>";
        }else{
            echo "Problema en la eliminacion...<br/>";
        }
        echo "<br/><a href='listarCliente_p1.php'>Volver</a>";
    }
    
    public function actualizarCliente($id, $nombre, $tipo_documento, $telefono, $direccion) 
    {
        $sql = "UPDATE cliente SET nombre=:nombre, tipo_documento=:tipo_documento, telefono=:telefono, direccion=:direccion WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':nombre',$nombre);
        $stmt->bindparam(':tipo_documento',$tipo_documento);
        $stmt->bindparam(':telefono',$telefono);
        $stmt->bindparam(':direccion',$direccion);
        if($stmt->execute()){
            echo "<font color='green'>Registro Actualizado Correctamente. <br/>"; 
        }else{
            echo "No se pudo Actualizar el registro";
        }
        echo "<br/><a href='listarCliente_p1.php'>Volver</a>";
    }
    
    // tabla proveedor
    public function listarProveedor()
    {
       $stmt = $this->conexion->prepare("SELECT id, nombre, email, telefono, direccion FROM proveedor ORDER BY id");
       $stmt->execute();
       $stmt->bindColumn("id",$id); 
       $stmt->bindColumn("nombre",$nombre);
       $stmt->bindColumn("email",$email);
       $stmt->bindColumn("telefono",$telefono);
       $stmt->bindColumn("direccion",$direccion);
       return $stmt->fetchAll();
       $stmt->close();
    }
    
    public function insertarProveedor($nombre,$email,$telefono,$direccion)
    {
        $sql = "INSERT INTO proveedor(nombre, email, telefono, direccion) VALUES (:nombre, :email, :telefono, :direccion)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt->bindparam(':email',$email,PDO::PARAM_STR);
        $stmt->bindparam(':telefono',$telefono,PDO::PARAM_INT);
        $stmt->bindparam(':direccion',$direccion,PDO::PARAM_STR);
        if($stmt->execute()){
            echo "<font color='green'>Registro Agregado Correctamente. <br/>";
            echo "Cantidad de Registros Agregados: ".$stmt->rowCount()."<br/>";
        }else{
            echo "No se pudo hacer el registro";
        }
        echo "<br/><a href='listarproveedor_p1.php'>Volver</a>";
    }
    
    public function eliminarProveedor($id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM proveedor WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        if ($stmt->execute(array(':id' => $id))){
            echo "<font color='red'>Proveedor Eliminado Correctamente. <br/>";
        }else{
            echo "Problema en la eliminacion...<br/>";
        }
        echo "<br/><a href='listarProveedor_p1.php'>Volver</a>";
    }
    
    public function actualizarProveedor($id, $nombre, $email, $telefono, $direccion) 
    {
        $sql = "UPDATE proveedor SET nombre=:nombre, email=:email, telefono=:telefono, direccion=:direccion WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':nombre',$nombre);
        $stmt->bindparam(':email',$email);
        $stmt->bindparam(':telefono',$telefono);
        $stmt->bindparam(':direccion',$direccion);
        if($stmt->execute()){
            echo "<font color='green'>Registro Actualizado Correctamente. <br/>"; 
        }else{
            echo "No se pudo Actualizar el registro";
        }
        echo "<br/><a href='listarProveedor_p1.php'>Volver</a>";
    }
       //tabla producto
       public function listarProducto()
    {
       $stmt = $this->conexion->prepare("SELECT id, nombre, cantidad, precio FROM producto ORDER BY id");
       $stmt->execute();
       $stmt->bindColumn("id",$id); 
       $stmt->bindColumn("nombre",$nombre);
       $stmt->bindColumn("cantidad",$cantidad);
       $stmt->bindColumn("precio",$precio);
       return $stmt->fetchAll();
       $stmt->close();
    }
    
    public function insertarProducto($nombre,$cantidad,$precio)
    {
        $sql = "INSERT INTO producto(nombre, cantidad, precio) VALUES (:nombre, :cantidad, :precio)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt->bindparam(':cantidad',$cantidad,PDO::PARAM_INT);
        $stmt->bindparam(':precio',$precio,PDO::PARAM_INT);
        if($stmt->execute()){
            echo "<font color='green'>Registro Agregado Correctamente. <br/>";
            echo "Cantidad de Registros Agregados: ".$stmt->rowCount()."<br/>";
        }else{
            echo "No se pudo hacer el registro";
        }
        echo "<br/><a href='listarproducto_p1.php'>Volver</a>";
    }
    
    public function eliminarProducto($id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM producto WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        if ($stmt->execute(array(':id' => $id))){
            echo "<font color='red'>Producto Eliminado Correctamente. <br/>";
        }else{
            echo "Problema en la eliminacion...<br/>";
        }
        echo "<br/><a href='listarProducto_p1.php'>Volver</a>";
    }
    
    public function actualizarProducto($id, $nombre, $cantidad, $precio) 
    {
        $sql = "UPDATE producto SET nombre=:nombre, cantidad=:cantidad, precio=:precio WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':nombre',$nombre);
        $stmt->bindparam(':cantidad',$cantidad);
        $stmt->bindparam(':precio',$precio);
        if($stmt->execute()){
            echo "<font color='green'>Registro Actualizado Correctamente. <br/>"; 
        }else{
            echo "No se pudo Actualizar el registro";
        }
        echo "<br/><a href='listarProducto_p1.php'>Volver</a>";
    }
    //tabla pedido
       public function listarPedido()
    {
       $stmt = $this->conexion->prepare("SELECT id, nombre_pedido, cantidad, telefono FROM pedido ORDER BY id");
       $stmt->execute();
       $stmt->bindColumn("id",$id); 
       $stmt->bindColumn("nombre_pedido",$nombre_pedido);
       $stmt->bindColumn("cantidad",$cantidad);
       $stmt->bindColumn("telefono",$telefono);
       return $stmt->fetchAll();
       $stmt->close();
    }
    
    public function insertarPedido($nombre_pedido,$cantidad,$telefono)
    {
        $sql = "INSERT INTO pedido(nombre_pedido, cantidad, telefono) VALUES (:nombre_pedido, :cantidad, :telefono)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':nombre_pedido',$nombre_pedido,PDO::PARAM_STR);
        $stmt->bindparam(':cantidad',$cantidad,PDO::PARAM_INT);
        $stmt->bindparam(':telefono',$telefono,PDO::PARAM_INT);
        if($stmt->execute()){
            echo "<font color='green'>Registro Agregado Correctamente. <br/>";
            echo "Cantidad de Registros Agregados: ".$stmt->rowCount()."<br/>";
        }else{
            echo "No se pudo hacer el registro";
        }
        echo "<br/><a href='listarpedido_p1.php'>Volver</a>";
    }
    
    public function eliminarPedido($id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM pedido WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        if ($stmt->execute(array(':id' => $id))){
            echo "<font color='red'>Producto Eliminado Correctamente. <br/>";
        }else{
            echo "Problema en la eliminacion...<br/>";
        }
        echo "<br/><a href='listarPedido_p1.php'>Volver</a>";
    }
    
    public function actualizarPedido($id, $nombre_pedido, $cantidad, $telefono) 
    {
        $sql = "UPDATE pedido SET nombre_pedido=:nombre_pedido, cantidad=:cantidad, telefono=:telefono WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':nombre_pedido',$nombre_pedido);
        $stmt->bindparam(':cantidad',$cantidad);
        $stmt->bindparam(':telefono',$telefono);
        if($stmt->execute()){
            echo "<font color='green'>Registro Actualizado Correctamente. <br/>"; 
        }else{
            echo "No se pudo Actualizar el registro";
        }
        echo "<br/><a href='listarPedido_p1.php'>Volver</a>";
    }
    //tabla categoria_producto//////////////////// 
       public function listarCategoria_producto()
    {
       $stmt = $this->conexion->prepare("SELECT id, nombre, tipo_producto FROM categoria_producto ORDER BY id");
       $stmt->execute();
       $stmt->bindColumn("id",$id); 
       $stmt->bindColumn("nombre",$nombre);
       $stmt->bindColumn("tipo_producto",$tipo_producto);
       return $stmt->fetchAll();
       $stmt->close();
    }
    
    public function insertarCategoria_producto($nombre,$tipo_producto)
    {
        $sql = "INSERT INTO categoria_producto(nombre, tipo_producto) VALUES (:nombre, :tipo_producto)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':nombre',$nombre,PDO::PARAM_STR);
        $stmt->bindparam(':tipo_producto',$tipo_producto,PDO::PARAM_STR);
        if($stmt->execute()){
            echo "<font color='green'>Registro Agregado Correctamente. <br/>";
            echo "Cantidad de Registros Agregados: ".$stmt->rowCount()."<br/>";
        }else{
            echo "No se pudo hacer el registro";
        }
        echo "<br/><a href='listarCategoria_producto_p1.php'>Volver</a>";
    }
    
    public function eliminarCategoria_producto($id)
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM categoria_producto WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        if ($stmt->execute(array(':id' => $id))){
            echo "<font color='red'>Categoria Eliminado Correctamente. <br/>";
        }else{
            echo "Problema en la eliminacion...<br/>";
        }
        echo "<br/><a href='listarCategoria_producto_p1.php'>Volver</a>";
    }
    
    public function actualizarCategoria_producto($id, $nombre, $tipo_producto) 
    {
        $sql = "UPDATE categoria_producto SET nombre=:nombre, tipo_producto=:tipo_producto WHERE id=:id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->bindparam(':nombre',$nombre);
        $stmt->bindparam(':tipo_producto',$tipo_producto);
        if($stmt->execute()){
            echo "<font color='green'>Registro Actualizado Correctamente. <br/>"; 
        }else{
            echo "No se pudo Actualizar el registro";
        }
        echo "<br/><a href='listarCategoria_producto_p1.php'>Volver</a>";  
    }
}
?>