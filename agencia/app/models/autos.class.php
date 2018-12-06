<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $usuario = null;
	private $placa = null;
	private $imagen = null;
	private $categoria = null;
	private $plan = null;
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
	public function setUsuario($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getUsuario(){
		return $this->usuario;
	}

	public function setPlaca($value){
		if($this->validateAlphanumeric($value, 1, 10)){
			$this->placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPlaca(){
		return $this->placa;
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

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 50000, 50000)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/productos/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

	public function setCategoria($value){
		if($this->validateId($value)){
			$this->categoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function setPlan($value){
		if($this->validateId($value)){
			$this->plan = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPlan(){
		return $this->plan;
	}

	public function setMarca($value){
		if($this->validateId($value)){
			$this->marca = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMarca(){
		return $this->marca;
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
	public function getCategoriaProductos(){
		$sql = "SELECT nombre_categoria, id_producto, imagen_producto, nombre_producto, descripcion_producto, precio_producto FROM productos INNER JOIN categorias USING(id_categoria) WHERE id_categoria = ? AND estado_producto = 1 ORDER BY nombre_producto";
		$params = array($this->categoria);
		return Database::getRows($sql, $params);
	}

	public function getAutos(){
		$sql = "SELECT v.PK_id_vehiculo, v.anio, v.estado, v.FK_id_modelo, v.placa, u.nombres_usuario, m.modelos_vehiculo from vehiculos v, usuarios_anuncios u, modelos_vehiculos m WHERE v.FK_id_usuario = u.id_usuario AND v.FK_id_modelo = m.PK_id_modelo_vehiculo ORDER BY anio";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchauto($value){
		$sql = "SELECT v.PK_id_vehiculo, v.anio, v.estado, v.FK_id_modelo, v.placa, u.nombres_usuario, m.modelos_vehiculo 
		from vehiculos v, usuarios_anuncios u, modelos_vehiculos m 
		WHERE 
		v.placa LIKE ? 
		ORDER BY anio";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT categorias.ID_categoria , categorias.nombre_categoria 
		FROM categorias ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPlanes(){
		$sql = "SELECT id_plan, nombre_plan FROM planes";
		$params = array(null);
		return Database::getRows($sql, $params);
	}


	public function createProducto(){
		$sql = "INSERT INTO producto(nombre_producto, precio, imagen_url, estado, FK_ID_categoria, FK_ID_marca) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre,  $this->precio, $this->imagen, $this->estado, $this->categoria, $this->marca);
		return Database::executeRow($sql, $params);
	}
	public function setModelo($value){
		if($this->validateId($value)){
			$this->modelo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getModelo(){
		return $this->modelo;
	}
	public function getModelos(){
		$sql = "SELECT PK_id_modelo_vehiculo, modelos_vehiculo FROM modelos_vehiculos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function readauto(){
		$sql = "SELECT v.PK_id_vehiculo, v.anio, v.estado, v.FK_id_modelo, v.placa, u.nombres_usuario, m.modelos_vehiculo from vehiculos v, usuarios_anuncios u, modelos_vehiculos m WHERE v.FK_id_usuario = u.id_usuario AND v.FK_id_modelo = m.PK_id_modelo_vehiculo
		and PK_id_vehiculo = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['placa'];
			$this->usuario = $producto['nombres_usuario'];
			$this->modelo = $producto['FK_id_modelo'];
			$this->estado = $producto['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateauto(){
		$sql = "UPDATE vehiculos SET FK_id_modelo = ?,  estado = ?, placa = ? WHERE PK_id_vehiculo = ?";
		$params = array($this->modelo, $this->estado, $this->placa, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>