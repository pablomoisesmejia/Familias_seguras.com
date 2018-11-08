<?php
class Cotizaciones_vida extends Validator
{
    private $PK_id_cotizacion = null;
    private $nombre_asegurado = null;
    private $fecha_nacimiento = null;
    private $fumador = null;
    private $suma_asegurada = null;
    private $cesion_bancaria = null;
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
    
    public function setNombreAsegurado($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nombre_asegurado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombreAsegurado()
	{
		return $this->nombre_asegurado;
    }
    
    public function setFechaNacimiento($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_nacimiento = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaNacimiento()
	{
		return $this->fecha_nacimiento;
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

	public function createSeguroVida()
	{
		$sql = "INSERT INTO cotizaciones_vida(nombre_asegurado_ppal, fecha_nacimineto, fumador, suma_asegurada, cesion_bancaria, FK_id_cliente) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre_asegurado, $this->fecha_nacimiento, $this->fumador, $this->suma_asegurada, $this->cesion_bancaria, $this->id_cliente);
		$seguro_vida =  Database::executeRow($sql, $params);
		if($seguro_vida)
		{
			$this->id_cotizacion = Database::getLastRowId();
		}
	}
}
?>