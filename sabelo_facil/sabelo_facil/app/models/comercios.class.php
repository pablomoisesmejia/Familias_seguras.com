<?php
class Comercios extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $producto = null;
	private $correo = null;
	private $telefono = null;
	private $responsable = null;
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

	public function setResponsable($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->responsable = $value;
			return true;
		}else{
			return false;
		}
	}

	public function getResponsable(){
		return $this->responsable;
	}


	public function setTelefono($value){
		if($this->validateNumeric($value, 1, 11)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefono(){
		return $this->telefono;
	}


	
	
	public function setProducto($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->producto = $value;
			return true;
		}else{
			return false;
		}
	}

	public function getProducto(){
		return $this->producto;
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

		//----------------------------------
		public function getEstados(){
			$sql = "SELECT ID_estadoC, EstadoC 
			FROM estado_comercio";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		public function setEstado($value){
			if($this->validateId($value)){
				$this->estado = $value;
				return true;
			}else{
				return false;
			}
	
		}
		public function getEstado(){
			return $this->estado;
		}
		//------------------------------------

	//Metodos para el manejo del CRUD
	public function getComercios(){
		$sql = "SELECT ID_comercio, nombre, correo, telefono, responsable, FK_ID_estado_comercio FROM comercio ORDER BY nombre";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchComercio($value){
		$sql = "SELECT * FROM comercio WHERE nombre, responsable,telefono LIKE ? OR producto LIKE ? ORDER BY nombre";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createComercio(){
		$sql = "INSERT INTO comercio(nombre, correo, telefono, responsable, FK_ID_estado_comercio) VALUES(?,?,?,?,?)";
		$params = array($this->nombre,  $this->correo, $this->telefono, $this->responsable, $this->estado);
		return Database::executeRow($sql, $params);
	}
	public function readComercio(){
		$sql = "SELECT nombre, correo,telefono,responsable,FK_ID_estado_comercio FROM comercio WHERE ID_comercio = ?";
		$params = array($this->id);
		$comercio = Database::getRow($sql, $params);
		if($comercio){
			$this->nombre = $comercio['nombre'];
			$this->correo = $comercio['correo'];
			$this->telefono = $comercio['telefono'];
			$this->responsable = $comercio['responsable'];
			$this->estado = $comercio['FK_ID_estado_comercio'];
			
			return true;
		}else{
			return null;
		}
	}
	public function updateComercio(){
		$sql = "UPDATE comercio SET nombre = ?,  correo = ?,telefono = ?, responsable = ?, FK_ID_estado_comercio = ? WHERE ID_comercio = ?";
		$params = array($this->nombre, $this->correo, $this->telefono, $this->responsable, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function deleteComercio(){
		$sql = "DELETE FROM comercio WHERE ID_comercio = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>