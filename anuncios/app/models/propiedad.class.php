<?php

class Propiedad extends Validator
{
    private $PK_id_propiedad = null;
    private $FK_id_tipo_propiedad = null;
    private $FK_id_usuario = null;
    private $FK_id_transaccion = null;
    private $colonia = null;
    private $municipio = null;
    private $departamento = null;
    private $terreno = null;
    private $construccion = null;
    private $niveles = null;
    private $habitaciones = null;
    private $baños = null;
    private $cochera = null;
    private $descripcion = null;
    private $amenidades = null;
    private $valor = null;
    private $telefono = null;
    private $direccion = null;


    public function setIdPropiedad($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdPropiedad()
    {
		return $this->PK_id_propiedad;
    }

    public function setIdTipoPropiedad($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_tipo_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdTipoPropiedad()
    {
		return $this->FK_id_tipo_propiedad;
    }

    public function setIdUsuario($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_usuario = $value;
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

    public function setIdTransaccion($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_transaccion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdTransaccion()
    {
		return $this->FK_id_transaccion;
    }

    public function setColonia($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
			$this->colonia = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getColonia()
    {
		return $this->colonia;
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
    
    public function setTerreno($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->terreno = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTerreno()
    {
		return $this->terreno;
    }
    
    public function setConstruccion($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->construccion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getConstruccion()
    {
		return $this->construccion;
    }
    
    public function setNiveles($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->niveles = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getNiveles()
    {
		return $this->niveles;
    }
    
    public function setHabitaciones($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->habitaciones = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getHabitaciones()
    {
		return $this->habitaciones;
    }
    
    public function setBaños($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->baños = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getBaños()
    {
		return $this->baños;
    }
    
    public function setCochera($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->cochera = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCochera()
    {
		return $this->cochera;
	}
}

?>