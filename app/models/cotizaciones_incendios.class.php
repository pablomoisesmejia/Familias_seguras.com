<?php
class Cotizaciones_incendios extends Validator
{
    //Declaracion de variables
    private $id_cotizacion = null;
    private $tipo_inmueble = null;
    private $direccion = null;
    private $valor_construccion = null;
    private $valor_contenido = null;
    private $id_cliente = null;

    //Métodos para sobrecarga de propiedades
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

	public function createSeguroIncendio()
	{
		$sql = "INSERT INTO cotizaciones_incendios(tipo_inmueble, direccion, valor_construccion, valor_contenido, FK_id_cliente) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->tipo_inmueble, $this->direccion, $this->valor_construccion, $this->valor_contenido, $this->id_cliente);
		$seguro_incendios = Database::executeRow($sql, $params);
		if($seguro_incendios)
		{
			$this->id_cotizacion = Database::getLastRowId();
		}
	}
}
?>