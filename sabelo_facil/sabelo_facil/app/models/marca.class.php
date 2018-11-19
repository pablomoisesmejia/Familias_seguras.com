<?php
class Marca extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $correo = null;
	private $telefono = null;
	private $direccion = null;
	private $imagen = null;
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

	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
	}
	
	public function setTelefono($value){
		if($this->validateId($value)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
	}

	public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 500)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
    }

	public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/marcas/", 2000, 2000)){
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
		if(unlink("../../web/img/marcas/".$this->imagen)){
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

	//Metodos para el manejo del CRUD
	public function getMarcas(){
		$sql = "SELECT ID_marca, nombre_marca, correo, telefono, direccion, imagen_url, estado FROM marca ORDER BY nombre_marca";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchMarcas($value){
		$sql = "SELECT ID_marca, nombre_marca, correo, telefono, direccion, imagen_url, estado
				FROM marca WHERE nombre_marca LIKE ? ORDER BY nombre_marca";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createMarcas(){
		$sql = "INSERT INTO marca( nombre_marca, correo, telefono, direccion, imagen_url, estado) VALUES(?,?,?,?,?,?)";
		$params = array($this->nombre,$this->correo,$this->telefono,$this->direccion, $this->imagen, 1);	
		return Database::executeRow($sql, $params);
	}
	public function readMarcas(){
		$sql = "SELECT nombre_marca, correo, telefono, direccion, imagen_url, estado FROM marca WHERE ID_marca = ?";
		$params = array($this->id);
		$Marca = Database::getRow($sql, $params);
		if($Marca){
			$this->nombre = $Marca['nombre_marca'];
			$this->correo = $Marca['correo'];
			$this->telefono = $Marca['telefono'];
			$this->direccion = $Marca['direccion'];
			$this->imagen = $Marca['imagen_url'];
			$this->estado = $Marca['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMarcas(){
		$sql = "UPDATE marca SET nombre_marca = ?, correo = ?, telefono = ?, direccion = ?, imagen_url = ?, estado = ? WHERE ID_marca = ?";
		$params = array($this->nombre, $this->correo, $this->telefono, $this->direccion, $this->imagen, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteMarcas(){
		$sql = "DELETE FROM marca WHERE ID_marca = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>