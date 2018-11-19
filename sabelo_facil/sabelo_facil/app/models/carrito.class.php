<?php

class Detalle extends Validator{

	//Declaración de propiedades
    private $id = null;
    private $id_venta = null;
    private $id_producto = null;
    private $cantidad = null;
    private $subtotal = null;
	private $id_usuario = null;
    private $estadoventa = null;
    private $total = null;
    private $nventa = null;
    private $ventastotales = null;
    private $clientestotales = null;
    private $comentariosT = null;
    
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

    public function setId_venta($value){
		if($this->validateId($value)){
			$this->id_venta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_venta(){
		return $this->id_venta;
    }

    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
    }

    public function setCantidad($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }

    public function setNventas($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->nventa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNventas(){
		return $this->nventa;
    }

    public function setVentasTotales($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->ventastotales = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getVentasTotales(){
		return $this->ventastotales;
    }

    public function setComentariosT($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->comentariosT = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getComentariosT(){
		return $this->comentariosT;
    }

    public function setClientesTotales($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->clientestotales = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClientesTotales(){
		return $this->clientestotales;
    }
    
    public function setSubtotal($value){
		if($this->validateMoney($value)){
			$this->subtotal = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getSubtotal(){
		return $this->subtotal;
    }

    public function setTotal($value){
		if($this->validateMoney($value)){
			$this->total = $value;
			return true;
		}else{
			return false;
		}
	}
	    public function getTotal(){
		return $this->total;
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

    public function setEstadoventa($value){
		if($value == "1" || $value == "0"){
			$this->estadoventa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstadoventa(){
		return $this->estadoventa;
    }
    
    //metodos para manejar el CRUD
    public function getVentas(){
		$sql = "SELECT  venta.ID_venta as ventass ,cliente.nombre,cliente.apellido,cliente.correo,venta.fecha,producto.nombre_producto , producto.precio , detalle_factura.cantidad ,detalle_factura.sub_total 
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.ID_venta
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN cliente ON venta.FK_ID_cliente = cliente.ID_cliente
        ORDER BY venta.ID_venta ASC";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    public function getVentas22(){
		$sql = "SELECT  venta.ID_venta as ventass ,cliente.nombre,cliente.apellido,cliente.correo,venta.fecha,  SUM(detalle_factura.sub_total) AS totalito
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.ID_venta
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN cliente ON venta.FK_ID_cliente = cliente.ID_cliente
        GROUP BY venta.ID_venta";
		$params = array(null);
		return Database::getRows($sql, $params);
    }

    public function getVentasporfecha($fechainicio,$fechafin){

		$sql = "SELECT  venta.ID_venta as ventass ,cliente.nombre,cliente.apellido,cliente.correo,venta.fecha,  SUM(detalle_factura.sub_total) AS totalito
        FROM detalle_factura 
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.ID_venta
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN cliente ON venta.FK_ID_cliente = cliente.ID_cliente
        WHERE venta.fecha BETWEEN ? AND ?
        GROUP BY venta.ID_venta";

        $params = array($fechainicio,$fechafin);
        return Database::getRows($sql, $params);
        
    }

    public function getSuscripcionesporfecha($fechainicio,$fechafin){

		$sql = "SELECT cliente.nombre,cliente.apellido,cliente.correo,cliente.genero,cliente.FK_ID_membresia ,membresia.fecha_inicio
        FROM cliente 
        INNER JOIN membresia ON cliente.FK_ID_membresia = membresia.ID_membresia
        WHERE cliente.FK_ID_membresia IS NOT null AND membresia.fecha_inicio BETWEEN ? AND ? ";
        $params = array($fechainicio,$fechafin);
        return Database::getRows($sql, $params);
        
    }

    public function getcomerciosdis(){
        $sql = "SELECT ID_comercio, nombre, Producto, correo, telefono, responsable, e.EstadoC 
        FROM comercio INNER JOIN estado_comercio e ON e.ID_estadoC = comercio.FK_ID_estado_comercio WHERE e.ID_estadoC = '1' ";
         $params = array(null);
         return Database::getRows($sql, $params);
    }

    public function getcomerciospen(){
        $sql = "SELECT ID_comercio, nombre, Producto, correo, telefono, responsable, e.EstadoC 
        FROM comercio INNER JOIN estado_comercio e ON e.ID_estadoC = comercio.FK_ID_estado_comercio WHERE e.ID_estadoC = '2' ";
         $params = array(null);
         return Database::getRows($sql, $params);
    }




    
    public function searchVenta($value){
		$sql = "SELECT  venta.id_venta as venta,cliente.nombre_cliente,cliente.apellido,cliente.correo,venta.fecha,productos.nombre , productos.precio , detalle_factura.cantidad,detalle_factura.subtotal 
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.id_venta
        INNER JOIN productos ON detalle_factura.FK_ID_proucto = productos.id_producto
        INNER JOIN cliente ON venta.fk_id_usuario = cliente.id_cliente
		WHERE cliente.nombre_cliente LIKE ? OR venta.id_venta LIKE ?  ORDER BY venta.id_venta ASC";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }

    public function viewcarrito(){
        $sql = "SELECT detalle_factura.ID_detalle ,detalle_factura.FK_ID_producto,producto.imagen_url,producto.nombre_producto,detalle_factura.cantidad,producto.precio,detalle_factura.sub_total
        FROM detalle_factura
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        WHERE detalle_factura.FK_ID_cliente = ? AND detalle_factura.estadoventa = 0";
        $params = array($this->id_usuario);
        return Database::getRows($sql,$params);
    }

    public function viewcarrito2(){
        $sql = "SELECT detalle_factura.ID_detalle ,detalle_factura.FK_ID_producto,producto.imagen_url,producto.nombre_producto,detalle_factura.cantidad,producto.precio,detalle_factura.sub_total
		,venta.ID_venta
        FROM detalle_factura
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN venta on detalle_factura.FK_ID_venta = venta.ID_venta
        WHERE detalle_factura.FK_ID_cliente = ? AND detalle_factura.estadoventa = 1
        AND detalle_factura.FK_ID_venta = (SELECT MAX(venta.ID_venta) FROM venta)";
        $params = array($this->id_usuario);
        return Database::getRows($sql,$params);
    }

    public function facturafinal (){
        $sql="SELECT detalle_factura.ID_detalle ,detalle_factura.FK_ID_producto,producto.imagen_url,producto.nombre_producto
        ,detalle_factura.cantidad,producto.precio,detalle_factura.sub_total,venta.ID_venta
        FROM detalle_factura
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN venta on detalle_factura.FK_ID_venta = venta.ID_venta
        WHERE detalle_factura.FK_ID_cliente = 2 AND detalle_factura.estadoventa = 1
        AND detalle_factura.FK_ID_venta = (SELECT MAX(venta.ID_venta) FROM venta)";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    

     public function checkTotal(){
        $sql = "SELECT SUM(sub_total) 
        FROM detalle_factura
        WHERE detalle_factura.FK_ID_cliente = ? AND detalle_factura.estadoventa = 0";
         $params = array($this->id_usuario);
        $total = Database::getRow($sql, $params);
        if($total){
            $this->total = $total['SUM(sub_total)'];
            return true;
		}else{
			return null;
        }
    }
    public function viewtotal(){
        $sql = "SELECT SUM(detalle_factura.sub_total) AS codo FROM detalle_factura
        WHERE detalle_factura.FK_ID_venta = (SELECT MAX(venta.ID_venta) FROM venta)";
        $params = array(null);
        return Database::getRows($sql,$params);
    }
    
    public function createcarrito(){
        $sql = "INSERT INTO detalle_factura(FK_ID_producto,cantidad,sub_total,FK_ID_cliente,estadoventa) VALUES(?, ?, ?, ?, 0)";
        $params = array($this->id_producto, $this->cantidad, $this->subtotal, $this->id_usuario);
        return Database::executeRow($sql, $params);
    }

    public function updatecarritoventa(){
        $sql = "UPDATE detalle_factura SET FK_ID_venta = ?, estadoventa = 1 WHERE  FK_ID_cliente = ? and estadoventa = 0";
        $params = array($this->id_venta, $this->id_usuario);
        return Database::executeRow($sql, $params);
    }

    public function validar_repetido(){
        $sql = "SELECT * FROM detalle_factura WHERE FK_ID_producto = ? AND FK_ID_cliente = ? AND estadoventa = 0";
        $params = array($this->id_producto, $this->id_usuario);
        return Database::getRows($sql,$params);
    }
    public function validar_repetido2(){
        $sql = "SELECT cantidad FROM detalle_factura WHERE FK_ID_producto = ? AND FK_ID_cliente = ? AND estadoventa = 0";
        $params = array($this->id_producto, $this->id_usuario);
        $lleno = Database::getRow($sql, $params);
        if($lleno){
            $this->cantidad = $lleno['cantidad'];
            return true;
		}else{
			return null;
        }
    }

    public function modificarrepetido(){
        $sql = "UPDATE detalle_factura SET cantidad = ?,sub_total = ? WHERE  FK_ID_cliente = ? AND FK_ID_producto = ? AND estadoventa = 0";
        $params = array($this->cantidad, $this->subtotal, $this->id_usuario, $this->id_producto);
        return Database::executeRow($sql, $params);
    }

    public function getVentasTotales100(){
        $sql = "SELECT COUNT(venta.ID_venta) AS vtotales From venta";
        $params = array(null);
        $ventast = Database::getRow($sql, $params);
        if($ventast){
            $this->ventastotales = $ventast['vtotales'];
            return true;
		}else{
			return null;
        }

    }

    public function getComentariosTotales100(){
        $sql = "SELECT COUNT(valoracion.comentario) AS comT From valoracion";
        $params = array(null);
        $Comt = Database::getRow($sql, $params);
        if($Comt){
            $this->comentariosT = $Comt['comT'];
            return true;
		}else{
			return null;
        }

    }

    public function getClientesTotales100(){    
        $sql = "SELECT COUNT(cliente.ID_cliente) as clientesss From cliente Where cliente.estado = 0";
        $params = array(null);
        $clientesss = Database::getRow($sql, $params);
        if($clientesss){
            $this->clientestotales = $clientesss['clientesss'];
            return true;
		}else{
			return null;
        }

    }

    public function realizarcompra(){
        $sql="INSERT INTO venta(FK_ID_cliente, fecha, estado) VALUES (?,CURRENT_DATE,1)";
        $params = array($this->id_usuario);
        return Database::executeRow($sql, $params);
    }

    public function ventasactuales(){
        $sql = "SELECT MAX(ID_venta) AS ventitas From venta";
        $params = array(null);
        $ventas = Database::getRow($sql, $params);
        if($ventas){
            $this->nventa = $ventas['ventitas'];
            return true;
		}else{
			return null;
        }

    }
    public function actualizarventa(){
        $sql = "UPDATE detalle_factura SET FK_ID_venta = ?, estadoventa = 1 WHERE estadoventa = 0 AND FK_ID_cliente = ? ";
        $params = array($this->id_venta, $this->id_usuario);
        return Database::executeRow($sql, $params);
    }

    public function validarCompra(){
        $sql = "SELECT  venta.ID_venta as venta ,cliente.nombre,cliente.apellido,cliente.correo,venta.fecha,producto.nombre_producto , producto.precio , detalle_factura.cantidad,detalle_factura.sub_total 
        FROM detalle_factura
        INNER JOIN venta ON detalle_factura.FK_ID_venta = venta.ID_venta
        INNER JOIN producto ON detalle_factura.FK_ID_producto = producto.ID_producto
        INNER JOIN cliente ON venta.FK_ID_cliente = cliente.ID_cliente
        WHERE detalle_factura.estadoventa = 1 AND venta.FK_ID_cliente = ? AND detalle_factura.FK_ID_producto = ?
        ORDER BY venta.ID_venta ASC";
        $params = array($this->id_usuario,$this->id_producto);
        return Database::getRows($sql, $params);
    }

    public function readCarrito(){
		$sql = "SELECT ID_detalle,FK_ID_venta, FK_ID_producto, cantidad,sub_total,FK_ID_cliente, estadoventa  FROM detalle_factura WHERE ID_detalle = ?";
		$params = array($this->id);
		$detalle = Database::getRow($sql, $params);
		if($detalle){
			$this->id = $detalle['ID_detalle'];
			$this->id_venta = $detalle['FK_ID_venta'];
			$this->id_producto = $detalle['FK_ID_proucto'];
            $this->cantidad = $detalle['cantidad'];
            $this->subtotal = $detalle['sub_total'];
			$this->id_usuario = $detalle['FK_ID_cliente'];
			$this->estadoventa = $detalle['estadoventa'];
			return true;
		}else{
			return null;
		}
    }

    public function updateCarrito(){
        $sql = "UPDATE detalle_factura SET cantidad = ? ,sub_total = ?";
        $params = array($this->cantidad, $this->subtotal);
        return Database::executeRow($sql, $params);
    }
    
    public function deleteCarrito(){
        $sql = "DELETE FROM detalle_factura WHERE ID_detalle = ?";
        $params = array($this->id);
        return Database::executeRow($sql, $params);
    }
	
	

	
}
?>