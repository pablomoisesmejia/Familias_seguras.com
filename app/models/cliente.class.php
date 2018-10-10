<?php
class Cliente extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $id_tipo_cliente = null;
	private $nombre = null;
	private $telefono = null;
	private $correo = null;

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
		if($this->validateImage($file, $this->imagen, "../../web/img/productos/", 80000, 80000)){
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

	//Tablas extras
//------------------------
	public function getCategorias(){
		$sql = "SELECT ID_categoria, nombre_categoria 
		FROM categoria 
		WHERE estado=1";
		$params = array(null);
		return Database::getRows($sql, $params);
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
	//--------------------------------------
	public function getMarcas(){
		$sql = "SELECT ID_marca, nombre_marca 
		FROM marca 
		WHERE estado=1";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function setMarca($value){
		if($this->validateId($value)){
			$this->id_marca = $value;
			return true;
		}else{
			return false;
		}

	}
	public function getMarca(){
		return $this->id_marca;
	}
	//----------------------------------
	public function getProveedores(){
		$sql = "SELECT ID_proveedor, nombre_proveedor 
		FROM proveedor
		WHERE estado=1 ";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function setProveedor($value){
		if($this->validateId($value)){
			$this->id_proveedor = $value;
			return true;
		}else{
			return false;
		}

	}
	public function getProveedor(){
		return $this->id_proveedor;
	}
	//------------------------------------

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT nombre_categoria, id_producto, imagen_producto, nombre_producto, descripcion_producto, precio_producto FROM productos INNER JOIN categorias USING(id_categoria) WHERE id_categoria = ? AND estado = 1 ORDER BY nombre_producto";
		$params = array($this->categoria);
		return Database::getRows($sql, $params);
	}
	public function getProductos(){
		$sql = "SELECT producto.ID_producto, producto.imagen_url, producto.nombre_producto, producto.descripcion, producto.precio, categoria.nombre_categoria, producto.estado 
		FROM producto 
		INNER JOIN categoria ON producto.FK_ID_Categoria =categoria.ID_categoria 
		INNER JOIN proveedor ON producto.FK_ID_proveedor = proveedor.ID_proveedor
		INNER JOIN marca ON producto.FK_ID_marca = marca.ID_marca
		ORDER BY producto.estado desc";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT id_producto, imagen_producto, nombre_producto, descripcion_producto, precio_producto, nombre_categoria, estado_producto FROM productos INNER JOIN categorias USING(id_categoria) WHERE nombre_producto LIKE ? OR descripcion_producto LIKE ? ORDER BY nombre_producto";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}

	public function createProducto(){
		$sql = "INSERT INTO producto(nombre_producto, descripcion, precio, imagen_url, estado, FK_ID_categoria, FK_ID_marca, FK_ID_proveedor) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->id_categoria, $this->id_marca, $this->id_proveedor);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT producto.nombre_producto, producto.descripcion, producto.precio, producto.imagen_url, producto.FK_ID_Categoria,producto.FK_ID_marca,producto.FK_ID_proveedor,producto.estado 
		FROM producto WHERE producto.ID_producto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre_producto'];
			$this->descripcion = $producto['descripcion'];
			$this->precio = $producto['precio'];
			$this->imagen = $producto['imagen_url'];
			$this->id_categoria = $producto['FK_ID_Categoria'];
			$this->id_proveedor = $producto['FK_ID_proveedor'];
			$this->id_marca = $producto['FK_ID_marca'];
			$this->estado = $producto['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE producto SET nombre_producto = ?, descripcion = ?, precio = ?, imagen_url = ?, estado = ?, FK_ID_categoria = ?, FK_ID_marca = ?, FK_ID_proveedor = ?  WHERE id_producto = ?";
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->id_categoria, $this->id_marca, $this->id_proveedor, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>