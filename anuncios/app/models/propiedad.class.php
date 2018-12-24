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
    private $whatsapp = null;


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
    
    public function setDescripcion($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->descripcion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getDescripcion()
    {
		return $this->descripcion;
    }
    
    public function setAmenidades($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->amenidades = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAmenidades()
    {
		return $this->amenidades;
    }
    
    public function setValor($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->valor = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getValor()
    {
		return $this->valor;
    }
    
    public function setTelefono($value)
    {
        if($this->validateAlphanumeric($value, 1, 15))
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
    
    public function setWhatsapp($value)
    {
        if($this->validateAlphanumeric($value, 1, 15))
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

    public function getCorreoUsuario()
    {
        $sql = 'SELECT ua.id_usuario, ua.correo_usuario FROM usuarios_anuncios ua INNER JOIN propiedades p ON ua.id_usuario = p.FK_id_usuario WHERE p.PK_id_propiedad = ?';
        $params = array($this->PK_id_propiedad);
        return Database::getRow($sql, $params);
    }
    
    public function getPropiedades()
    {
        $sql = 'SELECT p.PK_id_propiedad, tp.tipo_propiedad, p.FK_id_usuario, t.transaccion, p.colonia, p.municipio, p.departamento, p.terreno, p.construccion, p.niveles, p.habitaciones, p.baños, p.cochera, p.descripcion, p.amenidades, p.valor
        FROM propiedades p INNER JOIN tipo_propiedad tp ON p.FK_id_tipo_propiedad = tp.PK_id_tipo_propiedad 
        INNER JOIN transaccion t ON p.FK_id_transaccion = t.PK_id_transaccion 
        WHERE FK_id_usuario = ?';
        $params = array($this->FK_id_usuario);
        return Database::getRows($sql, $params);
    }

    public function getImgPropiedad()
    {
        $sql = 'SELECT nombre_imagen_prop FROM imagenes_propiedad WHERE FK_id_propiedad = ?';
        $params = array($this->PK_id_propiedad);
        return Database::getRow($sql, $params);
    }

    public function getPropiedadDetalle()
    {
        $sql = 'SELECT p.PK_id_propiedad, p.FK_id_usuario, tp.tipo_propiedad, t.transaccion, p.colonia, p.municipio, p.departamento, p.terreno, p.construccion, p.niveles, p.habitaciones, p.baños, p.cochera, p.descripcion, p.amenidades, p.valor, ua.whatsapp, ua.telefono
        FROM propiedades p INNER JOIN tipo_propiedad tp ON p.FK_id_tipo_propiedad = tp.PK_id_tipo_propiedad 
        INNER JOIN transaccion t ON p.FK_id_transaccion = t.PK_id_transaccion 
        INNER JOIN usuarios_anuncios ua ON p.FK_id_usuario = ua.id_usuario
        WHERE p.PK_id_propiedad = ? ';
        $params = array($this->PK_id_propiedad);
        return Database::getRow($sql, $params);
    }

    public function getPropiedadesTransaccion()
    {
        $sql = 'SELECT p.PK_id_propiedad, p.colonia, p.municipio, p.departamento, p.niveles, p.habitaciones, p.baños, p.cochera, p.valor, ip.nombre_imagen_prop
        FROM propiedades p LEFT JOIN imagenes_propiedad ip ON p.PK_id_propiedad = ip.FK_id_propiedad
        WHERE FK_id_transaccion = ?  GROUP BY p.PK_id_propiedad';
        $params = array($this->FK_id_transaccion);
        return Database::getRows($sql, $params);
    }

    public function getTipoPropiedad()
    {
        $sql = 'SELECT PK_id_tipo_propiedad, tipo_propiedad FROM tipo_propiedad';
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function getTransaccion()
    {
        $sql = 'SELECT PK_id_transaccion, transaccion FROM transaccion';
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function createPropiedad()
    {
        $fecha = date('Y-m-d');
        $sql = 'INSERT INTO propiedades(FK_id_tipo_propiedad, FK_id_usuario, FK_id_transaccion, colonia, municipio, departamento, terreno, construccion, niveles, habitaciones, baños, cochera, descripcion, amenidades, valor, fecha_creacion) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->FK_id_tipo_propiedad, $this->FK_id_usuario, $this->FK_id_transaccion, $this->colonia, $this->municipio, $this->departamento, $this->terreno, $this->construccion, $this->niveles, $this->habitaciones, $this->baños, $this->cochera, $this->descripcion, $this->amenidades, $this->valor, $fecha);
        $propiedad = Database::executeRow($sql, $params);
        if($propiedad)
        {
            $this->PK_id_propiedad = Database::getLastRowId();
        }
    }
}

?>