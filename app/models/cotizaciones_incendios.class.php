<?php
class Cotizaciones_incendios extends Validator
{
    //Declaracion de variables
    private $PK_id_cotizacion = null;
    private $tipo_inmueble = null;
	private $direccion = null;
	private $asegurado_calidad = null;
    private $valor_construccion = null;
    private $valor_contenido = null;
    private $FK_id_cliente_prospecto = null;

    //Métodos para sobrecarga de propiedades
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
    
    public function setTipoInmueble($value)
	{
		if($this->validateAlphanumeric($value, 1, 35))
		{
			$this->tipo_inmueble = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipoInmueble()
	{
		return $this->tipo_inmueble;
    }
    
    public function setDireccion($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->direccion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDireccion()
	{
		return $this->direccion;
	}
	
	public function setAseguradoCalidad($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->asegurado_calidad = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getAseguradoCalidad()
	{
		return $this->asegurado_calidad;
	}
    
    public function setValorConstruccion($value)
	{
		if($this->validateAlphanumeric($value, 1, 15))
		{
			$this->valor_construccion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getValorConstruccion()
	{
		return $this->valor_construccion;
    }

    public function setValorContenido($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->valor_contenido = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getValorContenido()
	{
		return $this->valor_contenido;
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

	public function createSeguroIncendio()
	{
		$sql = "INSERT INTO cotizaciones_incendios(tipo_inmueble, direccion, asegurado_calidad, valor_construccion, valor_contenido, FK_id_cliente_prospecto) 
		VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($this->tipo_inmueble, $this->direccion, $this->asegurado_calidad, $this->valor_construccion, $this->valor_contenido, $this->FK_id_cliente_prospecto);
		$seguro_incendios = Database::executeRow($sql, $params);
		if($seguro_incendios)
		{
			$this->PK_id_cotizacion = Database::getLastRowId();
		}
	}
}
?>