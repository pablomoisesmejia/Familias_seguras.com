<?php
class Origenes_vehiculo extends Validator
{
    private $PK_id_origen_vehiculo = null;
	private $origen_vehiculo = null;

    public function setIdOrigen($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_origen_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdOrigen()
	{
		return $this->PK_id_origen_vehiculo;
    }

	public function setOrigenVehiculo($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->origen_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getOrigenVehiculo()
	{
		return $this->origen_vehiculo;
	}

	//FUNCIONES PARA EL SCRUD
	public function getOrigenesVehiculo()
	{
		$sql = 'SELECT PK_id_origen_vehiculo, origen_vehiculo FROM origenes_vehiculo';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

}
?>