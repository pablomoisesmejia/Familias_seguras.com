<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
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

	public function getDirectorio(){
		$sql = "SELECT a.id_anuncio, a.nombre_anuncio, a.imagen_producto, a.email_anuncio, p.nombre_plan, a.estado_anuncio from anuncio a, planes p 
		WHERE a.id_plan= p.id_plan";
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
	public function readdirectorio(){
		$sql = "SELECT nombre_anuncio, imagen_producto, id_Categoria, id_plan, estado_anuncio 
		FROM anuncio WHERE id_anuncio = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre_anuncio'];
			$this->imagen = $producto['imagen_producto'];
			$this->categoria = $producto['id_Categoria'];
			$this->plan = $producto['id_plan'];
			$this->estado = $producto['estado_anuncio'];
			return true;
		}else{
			return null;
		}
	}
	public function updatedirectorio(){
		$sql = "UPDATE anuncio SET nombre_anuncio = ?,  estado_anuncio = ?, id_categoria = ?, id_plan = ?  WHERE id_anuncio = ?";
		$params = array($this->nombre, $this->estado, $this->categoria, $this->plan, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>