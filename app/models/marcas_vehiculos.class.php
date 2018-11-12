<?php
class Marcas_vehiculos extends Validator
{
    private $PK_id_marca_vehiculo = null;
	private $marca_vehiculo = null;

    public function setIdMarca($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_marca_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdMarca()
	{
		return $this->PK_id_marca_vehiculo;
    }

	public function setMarcaVehiculo($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->marca_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getMarcaVehiculo()
	{
		return $this->marca_vehiculo;
	}

	//FUNCIONES PARA EL SCRUD
	public function getMarcasVehiculos()
	{
		$sql = 'SELECT PK_id_marca_vehiculo, marca_vehiculo FROM marcas_vehiculos';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
}
?>