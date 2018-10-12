<?php
class Cotizaciones_vehiculos extends Validator
{
    private $id_cotizacion = null;
    private $numero_licencia = null;
    private $id_cliente = null;

    public function setIdCotizacion($value)
	{
		if($this->validateId($value))
		{
			$this->id_cotizacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCotizacion()
	{
		return $this->id_cotizacion;
    }

    public function setNumeroLicencia($value)
	{
		if($this->validateAlphanumeric($value, 1, 20))
		{
			$this->numero_licencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNumeroLicencia()
	{
		return $this->numero_licencia;
	}
    
    public function setIdCliente($value)
	{
		if($this->validateId($value))
		{
			$this->id_cliente = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCliente()
	{
		return $this->id_cliente;
	}


	public function createSeguroVehiculo()
	{
		$sql = "INSERT INTO cotizaciones_vehiculo(numero_licencia, FK_id_cliente) VALUES(?, ?)";
		$params = array($this->numero_licencia, $this->id_cliente);
		$seguro_vehiculo = Database::executeRow($sql, $params);
		if($seguro_vehiculo)
		{
			$this->id_cotizacion = Database::getLastRowId();
		}
	}
}
?>