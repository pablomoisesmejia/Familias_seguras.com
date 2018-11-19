<?php
class Cupon extends Validator{
	//Declaración de propiedades
    private $id = null;
    private $nombre = null;
	private $id_comercio = null;
    private $id_categoria = null;
    private $precio = null;
    private $limite = null;
    private $existencia = null;	
	private $fechainicio = null;
    private $fechafinal = null;
	private $descripcion = null;
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
    
    public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}


	public function setcomercio($value){
		if($this->validateId($value)){
			$this->id_comercio = $value;
			return true;
		}else{
			return false;
		}

	}
	public function getcomercio(){
		return $this->id_comercio;
	}

	public function setCategoria($value){
		if($this->validateId($value)){
			$this->id_categoria = $value;
			return true;
		}else{
			return false;
		}

	}
	public function getCategoria(){
		return $this->id_categoria;
    }
    
    public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}
    
    public function setLimite($value){
		if($value == "1" || $value == "0"){
			$this->limite = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getLimite(){
		return $this->limite;
    }
    
    public function setExistencia($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->existencia = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getExistencia(){
		return $this->existencia;
    }
    
    
	public function setFechainicio($value){
		if($this->validateDate($value)){
			$this->fechainicio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechainicio(){
		$cadena = $this->fechainicio;
		$buscar = '-';
		$reemplazar = '/';
		
		return str_replace($buscar, $reemplazar, $cadena);;
    }
    
    
	public function setFechafinal($value){
		if($this->validateDate($value)){
			$this->fechafinal = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechafinal(){
		$cadena = $this->fechafinal;
		$buscar = '-';
		$reemplazar = '/';
		
		return str_replace($buscar, $reemplazar, $cadena);;
	}
	
	
	public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
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

	//Metodos para el manejo del CRUD
	public function getCategoriaCupones(){
		$sql = "SELECT nombre_categoria, id_producto, imagen_producto, nombre_producto, descripcion_producto, precio_producto FROM productos INNER JOIN categorias USING(id_categoria) WHERE id_categoria = ? AND estado = 1 ORDER BY nombre_producto";
		$params = array($this->categoria);
		return Database::getRows($sql, $params);
	}
	public function getCupones(){
		$sql = "SELECT cupones.ID_cupon , cupones.nombre_cupon ,cupones.precio, cupones.existencia,cupones.fecha_inicio,cupones.fecha_final,cupones.descripcion, cupones.limitado, categoria.nombre_categoria, comercio.nombre, cupones.estado FROM cupones 
        INNER JOIN categoria ON cupones.FK_ID_categoria = categoria.ID_categoria
        INNER JOIN comercio  ON cupones.FK_ID_comercio = comercio.ID_comercio";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCupones($value){
		$sql = "SELECT cupones.ID_cupon , cupones.nombre, cupones.precio, cupones.descripcion, cupones.limitado, categoria.nombre_categoria, cupones.estado FROM cupones 
        INNER JOIN categoria ON cupones.FK_ID_categoria = categoria.ID_categoria WHERE cupones.nombre LIKE ? OR cupones.descripcion LIKE ? ORDER BY cupones.nombre";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT ID_categoria, nombre_categoria FROM categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	 }
    public function getComercios(){
		$sql = "SELECT ID_comercio, nombre FROM comercio";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createCupon(){
		$sql = "INSERT INTO cupones(nombre , id_categoria, id_comercio,  precio, limitado ,existencia,fecha_inicio,fecha_final ,descripcion, estado) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->id_categoria, $this->id_comercio, $this->precio,$this->limite, $this->existencia,$this->fechainicio,$this->fechafinal,$this->descripcion, $this->estado);
		return Database::executeRow($sql, $params);
	}
	public function readCupones(){
		$sql = "SELECT nombre , id_categoria, id_comercio,  precio, limitado ,existencia,fecha_inicio,fecha_final ,descripcion, estado FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre_producto'];
			$this->descripcion = $producto['descripcion_producto'];
			$this->precio = $producto['precio_producto'];
			$this->imagen = $producto['imagen_producto'];
			$this->categoria = $producto['id_categoria'];
			$this->estado = $producto['estado_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCupon(){
		$sql = "UPDATE productos SET nombre_producto = ?, descripcion_producto = ?, precio_producto = ?, imagen_producto = ?, estado_producto = ?, id_categoria = ? WHERE id_producto = ?";
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->categoria, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCupon(){
		$sql = "DELETE FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>