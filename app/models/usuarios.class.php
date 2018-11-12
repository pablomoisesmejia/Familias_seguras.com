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

    public function setCiudad($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->ciudad = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getCiudad()
	{
		return $this->ciudad;
    }

    public function setPais($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->pais = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getPais()
	{
		return $this->pais;
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

    public function setWhatsapp($value)
	{
		if($this->validateAlphanumeric($value, 1, 8))
		{
			$this->whatsapp = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getWhatsapp()
	{
		return $this->whatsapp;
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

    public function setDuiFrontal($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->dui_frontal = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDuiFrontal()
	{
		return $this->dui_frontal;
    }

    public function setDuiReverso($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->dui_reverso = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getDuiReverso()
	{
		return $this->dui_reverso;
    }

    public function setNitFrontal($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nit_frontal = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNitFrontal()
	{
		return $this->nit_frontal;
    }

    public function setNitReverso($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nit_reverso = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNitReverso()
	{
		return $this->nit_reverso;
    }

    public function setNRC($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->nrc = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getNRC()
	{
		return $this->nrc;
    }

    public function setGiro($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->giro = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getGiro()
	{
		return $this->giro;
    }

    public function setUsuario($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->usuario = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getUsuario()
	{
		return $this->usuario;
    }

    public function setClave($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->clave = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getClave()
	{
		return $this->clave;
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

    public function setFechaFinalizacion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_finalizacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaFinalizacion()
	{
		return $this->fecha_finalizacion;
    }

    public function setMotivoFinalizacion($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->motivo_finalizacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getMotivoFinalizacion()
	{
		return $this->motivo_finalizacion;
	}
	

	//Funciones para SCRUD
	public function createUsuario()
	{
		$sql = "INSERT INTO usuarios(fecha_inclusion, hora_inclusion, nombres, apellidos, FK_id_tipo_team, FK_id_estado, fecha_inicio, direccion, departamento, ciudad, pais, correo, telefono, celular, whatsapp, fecha_nacimiento, dui_frontal, dui_reverso, nit_frontal, nit_reverso, nrc, giro, usuario, clave, observaciones, fecha_finalizacion, motivo_finalizacion) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->fecha_inclusion, $this->hora_inclusion, $this->nombres, $this->apellidos, $this->FK_id_tipo_team, $this->FK_id_estado, $this->fecha_inicio, $this->direccion, $this->departamento, $this->ciudad, $this->pais, $this->correo, $this->telefono, $this->celular, $this->whatsapp, $this->fecha_nacimiento, $this->dui_frontal, $this->dui_reverso, $this->nit_frontal, $this->nit_reverso, $this->nrc, $this->giro, $this->usuario, $this->clave, $this->observaciones, $this->fecha_finalizacion, $this->motivo_finalizacion);
		$usuario = Database::executeRow($sql, $params);
		if($usuario)
		{
			$this->PK_id_usuario = Database::getLastRowId();
		}
	}
}

?>