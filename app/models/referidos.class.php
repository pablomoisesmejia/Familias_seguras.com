<?php

class Referidos extends Validator
{
    private $PK_id_referido = null;
    private $nombres = null;
    private $apellidos = null;
    private $fecha_nacmiento = null;
    private $parentesco = null;
    private $edad = null;
    private $telefono = null;
    private $celular = null;
    private $correo = null;
    private $observaciones = null;
    private $FK_id_cliente_prospecto = null;

    public function setIdReferido($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_referido = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdReferido()
	{
		return $this->PK_id_referido;
    }

    public function setNombres($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nombres = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNombres()
	{
		return $this->nombres;
    }

    public function setApellidos($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->apellidos = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getApellidos()
	{
		return $this->apellidos;
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

    public function setParentesco($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->parentesco = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getParentesco()
	{
		return $this->parentesco;
    }

    public function setEdad($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->edad = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getEdad()
	{
		return $this->edad;
    }

    public function setTelefono($value)
	{
		if($this->validateAlphanumeric($value, 1, 8))
		{
			$this->telefono = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTelefono()
	{
		return $this->telefono;
    }

    public function setCelular($value)
	{
		if($this->validateAlphanumeric($value, 1, 8))
		{
			$this->celular = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCelular()
	{
		return $this->celular;
    }

    public function setCorreo($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->correo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCorreo()
	{
		return $this->correo;
    }

    public function setObservaciones($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->observaciones = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getObservaciones()
	{
		return $this->observaciones;
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
}
?>