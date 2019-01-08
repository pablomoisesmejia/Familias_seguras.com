<?php
class Cotizaciones_vehiculos extends Validator
{
    private $PK_id_cotizacion = null;
	private $FK_id_modelo_vehiculo = null;
	private $anio = null;
	private $FK_id_origen_vehiculo = null;
	private $valor = null;
	private $placa = null;
    private $FK_id_cliente_prospecto = null;

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

	public function setIdModeloVehiculo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_modelo_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdModeloVehiculo()
	{
		return $this->FK_id_modelo_vehiculo;
	}

	public function setAnio($value)
	{
		if($this->validateNumeric($value, 1, 4))
		{
			$this->anio = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getAnio()
	{
		return $this->anio;
	}

	public function setIdOrigenVehiculo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_origen_vehiculo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdOrigenVehiculo()
	{
		return $this->FK_id_origen_vehiculo;
	}

	public function setValor($value)
	{
		if($this->validateMoney($value))
		{
			$this->valor = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getValor()
	{
		return $this->valor;
	}

	public function setPlaca($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->placa = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getPlaca()
	{
		return $this->placa;
	}
    
    public function setIdClienteProspecto($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cliente_prospecto = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdClienteProspecto()
	{
		return $this->FK_id_cliente_prospecto;
	}


	//FUNCIONES PARA EL SCRUD
	public function createSeguroVehiculo()
	{
		$sql = "INSERT INTO cotizaciones_vehiculos(FK_id_modelo_vehiculo, anio, FK_id_origen_vehiculo, valor, FK_id_cliente_prospecto) 
		VALUES (?, ?, ?, ?, ?)";
		$params = array($this->FK_id_modelo_vehiculo, $this->anio, $this->FK_id_origen_vehiculo, $this->valor, $this->FK_id_cliente_prospecto);
		$seguro_vehiculo = Database::executeRow($sql, $params);
		if($seguro_vehiculo)
		{
			$this->PK_id_cotizacion = Database::getLastRowId();
		}
	}
}
?>