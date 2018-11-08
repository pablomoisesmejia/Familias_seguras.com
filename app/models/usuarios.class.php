<?php

class Usuarios extends Validator
{
    private $PK_id_usuario = null;
    private $fecha_inclusion = null;
    private $hora_inclusion = null;
    private $nombres = null;
    private $apellidos = null;
    private $FK_id_tipo_team = null;
    private $FK_id_estado = null;
    private $fecha_inicio = null;
    private $direccion = null;
    private $departamento = null;
    private $ciudad = null;
    private $pais = null;
    private $correo = null;
    private $telefono = null;
    private $celular = null;
    private $whatsapp = null;
    private $fecha_nacimiento = null;
    private $dui_frontal = null;
    private $dui_reverso = null;
    private $nit_frontal = null;   
    private $nit_reverso = null;
    private $nrc = null;
    private $giro = null;
    private $usuario = null;
    private $clave = null;
    private $observaciones = null;
    private $fecha_finalizacion = null;
    private $motivo_finalizacion = null;

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_usuario= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdUsuario()
	{
		return $this->PK_id_usuario;
    }
    
    public function setFechaInclusion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_inclusion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaInclusion()
	{
		return $this->fecha_inclusion;
    }
    
    public function setHoraInclusion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->hora_inclusion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getHoraInclusion()
	{
		return $this->hora_inclusion;
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

    public function setIdTipoTeam($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_tipo_team = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdTipoTeam()
	{
		return $this->FK_id_tipo_team;
    }

    public function setIdEstado($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_estado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEstado()
	{
		return $this->FK_id_estado;
    }

    public function setFechaInicio($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_inicio = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaInicio()
	{
		return $this->fecha_inicio;
    }

    public function setDireccion($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->fecha_inclusion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDireccion()
	{
		return $this->fecha_inclusion;
    }

    public function setDepartamento($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->fecha_inclusion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDepartamento()
	{
		return $this->fecha_inclusion;
    }
}

?>