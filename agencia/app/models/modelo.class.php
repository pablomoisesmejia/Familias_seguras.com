<?php
class Marca extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $marca =null;
	

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
	public function getMarcas(){
		$sql = "SELECT PK_id_marca_vehiculo, marca_vehiculo FROM marcas_vehiculos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	//Metodos para el manejo del CRUD
	public function getModelos(){
		$sql = "SELECT PK_id_modelo_vehiculo, modelos_vehiculo FROM modelos_vehiculos ORDER BY modelos_vehiculo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchModelos($value){
		$sql = "SELECT PK_id_modelo_vehiculo, modelos_vehiculo
				FROM modelos_vehiculos WHERE modelos_vehiculo LIKE ? ORDER BY modelos_vehiculo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createModelo(){
		$sql = "INSERT INTO modelos_vehiculos ( modelos_vehiculo, FK_id_marca_vehiculo) VALUES(?,?)";
		$params = array($this->nombre, $this->marca);	
		return Database::executeRow($sql, $params);
	}
	public function readModelos(){
		$sql = "SELECT modelos_vehiculo, FK_id_marca_vehiculo FROM modelos_vehiculos WHERE PK_ID_modelo_vehiculo = ?";
		$params = array($this->id);
		$Marca = Database::getRow($sql, $params);
		if($Marca){
			$this->nombre = $Marca['modelos_vehiculo'];
			$this->marca = $Marca['FK_id_marca_vehiculo'];
			return true;
		}else{
			return null;
		}
	}
	public function updateModelo(){
		$sql = "UPDATE modelos_vehiculos SET modelos_vehiculo = ?, FK_id_marca_vehiculo = ? WHERE PK_ID_modelo_vehiculo = ?";
		$params = array($this->nombre, $this->marca);
		return Database::executeRow($sql, $params);
	}
	public function deleteMarcas(){
		$sql = "DELETE FROM marca WHERE ID_marca = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>