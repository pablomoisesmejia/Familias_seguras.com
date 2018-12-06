<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $departamento =null;
	private $colonia = null;
	private $imagen = null;
	private $tipo_propiedad = null;
	private $precio = null;
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
	public function setColonia($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->colonia = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getColonia(){
		return $this->colonia;
	}
	public function setDepartamento($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->departamento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDepartamento(){
		return $this->departamento;
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

	public function setTipo($value){
		if($this->validateId($value)){
			$this->tipo_propiedad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo(){
		return $this->tipo_propiedad;
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

	public function getPropiedadesI(){
		$sql = "SELECT p.PK_id_propiedad, p.colonia, p.departamento, p.valor, p.estado, u.nombres_usuario, tp.tipo_propiedad, tr.transaccion 
		FROM propiedades p, usuarios_anuncios u, tipo_propiedad tp, transaccion tr
		 WHERE p.FK_id_tipo_propiedad= tp.PK_id_tipo_propiedad 
		 AND p.FK_id_usuario = u.id_usuario 
		 AND p.FK_id_transaccion = tr.PK_id_transaccion
		 AND p.FK_id_transaccion=1";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getPropiedadesII(){
		$sql = "SELECT p.PK_id_propiedad, p.colonia, p.departamento, p.valor, p.estado, u.nombres_usuario, tp.tipo_propiedad, tr.transaccion 
		FROM propiedades p, usuarios_anuncios u, tipo_propiedad tp, transaccion tr
		 WHERE p.FK_id_tipo_propiedad= tp.PK_id_tipo_propiedad 
		 AND p.FK_id_usuario = u.id_usuario 
		 AND p.FK_id_transaccion = tr.PK_id_transaccion
		 AND p.FK_id_transaccion=2";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, imagen_producto, nombre_producto, precio_producto,  estado_producto FROM productos WHERE nombre_producto LIKE ?  ORDER BY nombre_producto";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT categorias.ID_categoria , categorias.nombre_categoria 
		FROM categorias ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipos(){
		$sql = "SELECT PK_id_tipo_propiedad, tipo_propiedad FROM tipo_propiedad";
		$params = array(null);
		return Database::getRows($sql, $params);
	}


	public function createProducto(){
		$sql = "INSERT INTO producto(nombre_producto, precio, imagen_url, estado, FK_ID_categoria, FK_ID_marca) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre,  $this->precio, $this->imagen, $this->estado, $this->categoria, $this->marca);
		return Database::executeRow($sql, $params);
	}
	public function readpropiedad(){
		$sql = "SELECT p.PK_id_propiedad, p.colonia, p.departamento, p.valor, p.estado, p.FK_id_tipo_propiedad, u.nombres_usuario, tp.tipo_propiedad, tr.transaccion 
		FROM propiedades p, usuarios_anuncios u, tipo_propiedad tp, transaccion tr
		 WHERE p.FK_id_tipo_propiedad= tp.PK_id_tipo_propiedad 
		 AND p.FK_id_usuario = u.id_usuario 
		 AND p.FK_id_transaccion = tr.PK_id_transaccion 
		 AND p.PK_id_propiedad = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombres_usuario'];
			$this->departamento = $producto['departamento'];
			$this->colonia = $producto['colonia'];
			$this->precio = $producto['valor'];
			$this->estado = $producto['estado'];
			$this->tipo_propiedad = $producto['FK_id_tipo_propiedad'];
			return true;
		}else{
			return null;
		}
	}
	public function updatepropiedad(){
		$sql = "UPDATE propiedades SET departamento = ?, colonia = ?,  estado = ?, valor = ?, FK_id_tipo_propiedad = ?  WHERE PK_id_propiedad = ?";
		$params = array($this->departamento, $this->colonia, $this->estado, $this->precio, $this->tipo_propiedad, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>