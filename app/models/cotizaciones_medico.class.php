<?php
class Cotizaciones_Medico extends Validator
{
    private $PK_id_cotizacion = null;
    private $nombre_asegurado = null;
    private $fecha_nacimiento = null;
    private $nombre_conyugue = null;
    private $fecha_nacimiento_conyugue = null;
    private $cantidad_hijo = null;
    private $cobertura = null;
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

    
    public function setNombreConyugue($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nombre_conyugue = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombreConyugue()
	{
		return $this->nombre_conyugue;
    }
    
    public function setFechaNacimientoConyugue($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_nacimiento_conyugue = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaNacimientoConyugue()
	{
		return $this->fecha_nacimiento_conyugue;
    }

    public function setCantidadHijo($value)
	{
		if($this->validateAlphanumeric($value, 1, 2))
		{
			$this->cantidad_hijo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCantidadHijo()
	{
		return $this->cantidad_hijo;
    }

    public function setCobertura($value)
	{
		if($this->validateAlphanumeric($value, 1, 20))
		{
			$this->cobertura = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCobertura()
	{
		return $this->cobertura;
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

	public function createSeguroMedico()
	{
		$sql = "INSERT INTO cotizaciones_medico_hosp(nombre_conyugue, fecha_nacimiento_conyugue, cantidad_hijo, FK_id_cliente_prospecto) 
		VALUES (?, ?, ?, ?)";
		$params = array($this->nombre_conyugue, $this->fecha_nacimiento_conyugue, $this->cantidad_hijo, $this->FK_id_cliente_prospecto);
		$seguro_medico = Database::executeRow($sql, $params);
		if($seguro_medico)
		{
			$this->PK_id_cotizacion = Database::getLastRowId();
		}
	}
}
?>