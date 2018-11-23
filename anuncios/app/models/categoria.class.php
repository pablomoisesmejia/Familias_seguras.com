<?php
class Categoria extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $imagen = null;
	private $descripcion = null;

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

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/categorias/", 300, 300)){
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
		if(unlink("../../web/img/categorias/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
	}

	public function setDescripcion($value){
		if($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->descripcion = $value;
				return true;
			}else{
				return false;
			}
		}else{
			$this->descripcion = null;
			return true;
		}		
	}
	public function getDescripcion(){
		return $this->descripcion;
	}

	//Metodos para el manejo del CRUD
	public function getCategorias(){
		$sql = "SELECT id_categoria, nombre_categoria, imagen FROM categorias ORDER BY nombre_categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchCategoria($value){
		$sql = "SELECT * FROM categorias WHERE nombre_categoria LIKE ? OR descripcion_categoria LIKE ? ORDER BY nombre_categoria";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCategoria(){
		$sql = "INSERT INTO categorias(nombre_categoria, imagen_categoria, descripcion_categoria) VALUES(?, ?, ?)";
		$params = array($this->nombre, $this->imagen, $this->descripcion);
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT nombre_categoria, imagen_categoria, descripcion_categoria FROM categorias WHERE id_categoria = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['nombre_categoria'];
			$this->imagen = $categoria['imagen_categoria'];
			$this->descripcion = $categoria['descripcion_categoria'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCategoria(){
		$sql = "UPDATE categorias SET nombre_categoria = ?, imagen_categoria = ?, descripcion_categoria = ? WHERE id_categoria = ?";
		$params = array($this->nombre, $this->imagen, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM categorias WHERE id_categoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>