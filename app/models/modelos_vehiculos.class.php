<?php
class Modelos_vehiculos extends Validator
{
    private $PK_id_modelo_vehiculo = null;
    private $FK_id_marca_vehiculo = null;
	private $modelos_vehiculo = null;

    public function setIdModelo($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_modelo_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdModelo()
	{
		return $this->PK_id_modelo_vehiculo;
    }

    public function setIdMarca($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_marca_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdMarca()
	{
		return $this->FK_id_marca_vehiculo;
    }

	public function setModeloVehiculo($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->modelos_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getModeloVehiculo()
	{
		return $this->modelos_vehiculo;
	}

	//FUNCIONES PARA EL SCRUD
	public function getModelosxMarca()
	{
		$sql = 'SELECT PK_id_modelo_vehiculo, modelos_vehiculo FROM modelos_vehiculos WHERE FK_id_marca_vehiculo = ?';
		$params = array($this->FK_id_marca_vehiculo);
		return Database::getRows($sql, $params);
	}
}
?>