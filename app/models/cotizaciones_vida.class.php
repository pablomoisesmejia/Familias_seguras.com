<?php
class Cotizaciones_vida extends Validator
{
    private $PK_id_cotizacion = null;
    private $fumador = null;
    private $suma_asegurada = null;
    private $cesion_bancaria = null;
    private $FK_id_cliente_prospecto = null;

    public function setIdCotizacion($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_cotizacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCotizacion()
	{
		return $this->PK_id_cotizacion;
    }
    
    public function setFumador($value)
	{
		if($this->validateAlphanumeric($value, 1, 5))
		{
			$this->fumador = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFumador()
	{
		return $this->fumador;
    }

    public function setSumaAsegurada($value)
	{
		if($this->validateAlphanumeric($value, 1, 11))
		{
			$this->suma_asegurada = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getSumaAsegurada()
	{
		return $this->suma_asegurada;
    }

    public function setCesionBancaria($value)
	{
		if($this->validateAlphanumeric($value, 1, 5))
		{
			$this->cesion_bancaria = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCesionBancaria()
	{
		return $this->cesion_bancaria;
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

	public function createSeguroVida()
	{
		$sql = "INSERT INTO cotizaciones_vida(fumador, suma_asegurada, cesion_bancaria, FK_id_cliente_prospecto) VALUES(?, ?, ?, ?)";
		$params = array($this->fumador, $this->suma_asegurada, $this->cesion_bancaria, $this->FK_id_cliente_prospecto);
		$seguro_vida =  Database::executeRow($sql, $params);
		if($seguro_vida)
		{
			$this->PK_id_cotizacion = Database::getLastRowId();
		}
	}
}
?>