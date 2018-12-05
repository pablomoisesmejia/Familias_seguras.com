<?php
class Venta extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $id_usuario = null;
	private $fecha = null;
	private $estado = null;
    
    //Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
    }
    
    public function setCliente($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCliente(){
		return $this->id_usuario;
    }
    
    public function setFecha($value){
        if($this->validateDate($value)){
            $this->fecha = $value;
            return true;
        }else{
            return false;
        }
    }

    public function getFecha(){
        return $this->fecha;
    }

    
    public function setEstado($value){
		if($value == "1" || $value == "0"){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
    }
    
    //metodos para manejar el CRUD
    public function getVentas(){
		$sql = "SELECT  venta.ID_venta as ventass ,cliente.nombre,cliente.apellido,cliente.correo,venta.fecha,producto.nombre_producto , producto.precio , detalle_factura.cantidad,detalle_factura.sub_total 
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.ID_venta
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN cliente ON venta.FK_ID_cliente = cliente.ID_cliente
        ORDER BY venta.ID_venta ASC";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    
    public function searchVenta($value){
		$sql = "SELECT  venta.id_venta as venta,cliente.nombre_cliente,cliente.apellido,cliente.correo,venta.fecha,productos.nombre , productos.precio , detalle_factura.cantidad,detalle_factura.subtotal 
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.fk_id_venta = venta.id_venta
        INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto
        INNER JOIN cliente ON venta.fk_id_usuario = cliente.id_cliente
		WHERE cliente.nombre_cliente LIKE ? OR venta.id_venta LIKE ?  ORDER BY venta.id_venta ASC";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	
	public function checkCliente(){
		$sql = "SELECT * FROM venta WHERE FK_ID_cliente = ?";
		$params = array($this->id_usuario);
		return Database::getRows($sql, $params);


	}

	public function ventasPublic(){
		$sql = "SELECT  venta.fecha,productos.imagen,productos.nombre , productos.precio , detalle_factura.cantidad,detalle_factura.subtotal 
		FROM detalle_factura
		INNER JOIN venta ON detalle_factura.fk_id_venta = venta.id_venta
		INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto
		INNER JOIN cliente ON venta.fk_id_cliente = cliente.id_cliente
		WHERE venta.fk_id_cliente = ? AND detalle_factura.estadoventa = 1 
		ORDER BY venta.id_venta ASC";
		$params = array($this->id_usuario);
		return Database::getRows($sql, $params);


	}

	
}
?>