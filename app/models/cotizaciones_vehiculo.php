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
		if($this->validateNumeric($value, 1, 20))
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
}
?>