<?php
class Proveedor extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
    private $correo = null;
    private $telefono = null;
	private $direccion =  null;
	private $estado =  null;
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
		if($this->validateAlphabetic($value, 1, 50)){
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
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
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

	//Metodos para manejar el CRUD
	public function getProveedor(){
		$sql = "SELECT ID_proveedor, nombre_proveedor, correo, telefono, direccion, estado FROM proveedor ORDER BY nombre_proveedor";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProveedor($value){
		$sql = "SELECT ID_proveedor, nombre_proveedor, correo, telefono, direccion, estado 
                FROM proveedor WHERE nombre_proveedor LIKE ? ORDER BY nombre_proveedor";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createProveedor(){
		$sql = "INSERT INTO proveedor(nombre_proveedor, correo, telefono, direccion, estado) VALUES(?,?,?,?, ?)";
		$params = array($this->nombre, $this->correo, $this->telefono, $this->direccion, $this-> estado);
		return Database::executeRow($sql, $params);
	}
	public function readProveedor(){
		$sql = "SELECT ID_proveedor, nombre_proveedor, correo, telefono, direccion, estado FROM proveedor WHERE ID_proveedor = ?";
		$params = array($this->id);
		$Proveedor = Database::getRow($sql, $params);
		if($Proveedor){
			$this->nombre = $Proveedor['nombre_proveedor'];
            $this->correo = $Proveedor['correo'];
            $this->telefono = $Proveedor['telefono'];
            $this->direccion = $Proveedor['direccion'];
            $this->estado = $Proveedor['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProveedor(){
		$sql = "UPDATE proveedor SET nombre_proveedor = ?, correo = ?, telefono = ?, direccion=?, estado = ? WHERE ID_proveedor = ?";
		$params = array($this->nombre, $this->correo, $this->telefono, $this->direccion, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProveedor(){
		$sql = "DELETE FROM proveedor WHERE ID_proveedor = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>