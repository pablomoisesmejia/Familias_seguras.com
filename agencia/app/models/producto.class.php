<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $precio = null;
	private $imagen = null;
	private $categoria = null;
	private $marca = null;
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

	public function getProductos(){
		$sql = "SELECT producto.ID_producto, producto.imagen_url, producto.nombre_producto, producto.precio, categoria.nombre_categoria, marca.nombre_marca, producto.estado 
		FROM producto 
		INNER JOIN categoria ON producto.FK_ID_Categoria =categoria.ID_categoria 
		INNER JOIN marca ON producto.FK_ID_marca = marca.ID_marca
		ORDER BY producto.nombre_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, imagen_producto, nombre_producto, precio_producto,  estado_producto FROM productos WHERE nombre_producto LIKE ?  ORDER BY nombre_producto";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT categoria.ID_categoria , categoria.nombre_categoria 
		FROM categoria ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getMarcas(){
		$sql = "SELECT marca.ID_marca , marca.nombre_marca 
		FROM marca ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function createProducto(){
		$sql = "INSERT INTO producto(nombre_producto, precio, imagen_url, estado, FK_ID_categoria, FK_ID_marca) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre,  $this->precio, $this->imagen, $this->estado, $this->categoria, $this->marca);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre_producto, precio, imagen_url, FK_ID_Categoria, FK_ID_marca, estado 
		FROM producto WHERE ID_producto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre_producto'];
			$this->precio = $producto['precio'];
			$this->imagen = $producto['imagen_url'];
			$this->categoria = $producto['FK_ID_Categoria'];
			$this->marca = $producto['FK_ID_marca'];
			$this->estado = $producto['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE producto SET nombre_producto = ?,  precio_producto = ?, imagen_producto = ?, estado_producto = ?, FD_ID_categoria = ?, FK_ID_marca = ?  WHERE id_producto = ?";
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->categoria, $this->marca, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>