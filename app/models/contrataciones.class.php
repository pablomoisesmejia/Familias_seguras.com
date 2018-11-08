<?php

class Contrataciones extends Validator
{
    private $PK_id_contratacion = null;
    private $FK_id_usuario = null;
    private $estado_civil = null;
    private $profesion = null;
    private $lugar_trabajo = null;
    private $cargo = null;
    private $direccion = null;
    private $departamento = null;
    private $municipio = null;
    private $telefono = null;
    private $ingresos = null;

    public function setIdContratacion($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_contratacion= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdContratacion()
	{
		return $this->PK_id_contratacion;
    }

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdUsuario()
	{
		return $this->FK_id_usuario;
    }

    public function setEstadoCivil($value)
	{
		if($this->validateAlphanumeric($value, 1, 30))
		{
			$this->estado_civil= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getEstadoCivil()
	{
		return $this->estado_civil;
    }

    public function setProfesion($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->profesion= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getProfesion()
	{
		return $this->profesion;
    }

    public function setLugarTrabajo($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->lugar_trabajo= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getLugarTrabajo()
	{
		return $this->lugar_trabajo;
    }

    public function setCargo($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->cargo= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCargo()
	{
		return $this->cargo;
    }

    public function setDireccion($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
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

    public function setDepartamento($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->departamento = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDepartamento()
	{
		return $this->departamento;
    }

    public function setMunicipio($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->municipio = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getMunicipio()
	{
		return $this->municipio;
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
    public function setIngresos($value)
	{
		if($this->validateMoney($value))
		{
			$this->ingresos = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIngresos()
	{
		return $this->ingresos;
    }
}
?>