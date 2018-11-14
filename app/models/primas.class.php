<?php
class Primas extends Validator
{
    private $PK_id_prima = null;
    private $FK_id_cuadro_comparativo = null;
	private $prima = null;

    public function setIdPrima($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_prima = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdPrima()
	{
		return $this->PK_id_prima;
    }

    public function setIdCuadro($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cuadro_comparativo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCuadro()
	{
		return $this->FK_id_cuadro_comparativo;
    }

	public function setPrima($value)
	{
		if($this->validateAlphanumeric($value, 1, 40))
		{
			$this->prima = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getPrima()
	{
		return $this->prima;
	}

	//Funciones para el SCRUD
	public function getPrimas()
	{
		$sql = 'SELECT * FROM primas, cuadro_comparativo WHERE primas.FK_id_cuadro_comparativo = cuadro_comparativo.PK_id_cuadro_comparativo';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getCuadros()
	{
		$sql = 'SELECT * FROM cuadro_comparativo';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createPrima(){
		$sql = "INSERT INTO primas(prima, FK_id_cuadro_comparativo) VALUES (?, ?)";
		$params = array($this->prima, $this->FK_id_cuadro_comparativo);
		return Database::executeRow($sql, $params);
	}
	public function readPrima(){
		$sql = "SELECT prima, FK_id_cuadro_comparativo, plan FROM primas, cuadro_comparativo WHERE (primas.FK_id_cuadro_comparativo = cuadro_comparativo.PK_id_cuadro_comparativo) AND PK_id_prima = ?";
		$params = array($this->PK_id_prima);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->prima = $data['prima'];
			$this->FK_id_cuadro_comparativo = $data['FK_id_cuadro_comparativo'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePrima(){
		$sql = "UPDATE primas SET prima = ?, FK_id_cuadro_comparativo = ? WHERE PK_id_prima = ?";
		$params = array($this->prima, $this->FK_id_cuadro_comparativo, $this->PK_id_prima);
		return Database::executeRow($sql, $params);
	}
}
?>