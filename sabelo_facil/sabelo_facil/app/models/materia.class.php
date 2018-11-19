<?php
class Materia extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
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
	public function getMaterias(){
		$sql = "SELECT ID_materia, nombre_materia, descripcion, estado FROM materia ORDER BY nombre_materia";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchMaterias($value){
		$sql = "SELECT ID_materia, nombre_materia, descripcion, estado
				FROM materia WHERE nombre_materia LIKE ? ORDER BY nombre_materia";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createMaterias(){
		$sql = "INSERT INTO materia(nombre_materia, descripcion, estado) VALUES(?, ?, ?)";
		$params = array($this->nombre, $this->descripcion, $this->estado);	
		return Database::executeRow($sql, $params);
	}
	public function readMaterias(){
		$sql = "SELECT nombre_materia, descripcion, estado FROM materia WHERE ID_materia = ?";
		$params = array($this->id);
		$Materia = Database::getRow($sql, $params);
		if($Materia){
			$this->nombre = $Materia['nombre_materia'];
			$this->descripcion = $Materia['descripcion'];
			$this->estado = $Materia['estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMaterias(){
		$sql = "UPDATE materia SET nombre_materia = ?, descripcion = ?, estado = ? WHERE ID_materia = ?";
		$params = array($this->nombre, $this->descripcion, $this->estado, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteMaterias(){
		$sql = "DELETE FROM materia WHERE ID_materia = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>