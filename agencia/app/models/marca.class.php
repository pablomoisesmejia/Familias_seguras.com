<?php
class Marca extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	

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

	//Metodos para el manejo del CRUD
	public function getMarcas(){
		$sql = "SELECT PK_id_marca_vehiculo, marca_vehiculo FROM marcas_vehiculos ORDER BY marca_vehiculo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchMarcas($value){
		$sql = "SELECT PK_id_marca_vehiculo, marca_vehiculo
				FROM marcas_vehiculos WHERE marca_vehiculo LIKE ? ORDER BY marca_vehiculo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createMarcas(){
		$sql = "INSERT INTO marcas_vehiculos ( marca_vehiculo) VALUES(?)";
		$params = array($this->nombre);	
		return Database::executeRow($sql, $params);
	}
	public function readMarcas(){
		$sql = "SELECT marca_vehiculo FROM marcas_vehiculos WHERE PK_ID_marca_vehiculo = ?";
		$params = array($this->id);
		$Marca = Database::getRow($sql, $params);
		if($Marca){
			$this->nombre = $Marca['marca_vehiculo'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMarcas(){
		$sql = "UPDATE marcas_vehiculos SET marca_vehiculo = ? WHERE PK_ID_marca_vehiculo = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteMarcas(){
		$sql = "DELETE FROM marca WHERE ID_marca = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>