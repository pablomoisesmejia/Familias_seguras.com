<?php

class Vehiculos extends Validator
{
    private $PK_id_vehiculo = null;
    private $FK_id_usuario = null;
    private $FK_id_modelo = null;
    private $anio = null;
    private $color = null;
    private $kilometraje = null;
    private $transmision = null;
    private $motor = null;
    private $vidrios_electricos = null;
    private $espejos_electricos = null;
    private $aire_acondicionado = null;
    private $bolsas_aire = null;
    private $sistema_eco = null;
    private $mandos_timon = null;
    private $rines_especiales = null;
    private $camara_trasera = null;
    private $sensores_parqueo = null;
    private $bluetooth = null;
    private $combustible = null;
    private $sunroof = null;
    private $luces_xenon = null;
    private $cruise_control = null;
    private $mando_distancia = null;
    private $gps = null;
    private $tapiceria_cuero = null;
    private $dvd_trasero = null;
    private $valor = null;
    private $whatsapp = null;
    private $telefono = null;
    private $placa = null;
    
    public function setIdVehiculo($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_vehiculo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdVehiculo()
    {
		return $this->PK_id_vehiculo;
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
    
    public function setIdModelo($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_modelo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdModelo()
    {
		return $this->FK_id_modelo;
    }
    
    public function setAnio($value)
    {
        if($this->validateNumeric($value, 1, 4))
        {
			$this->anio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAnio()
    {
		return $this->anio;
    }
    
    public function setColor($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
			$this->color = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getColor()
    {
		return $this->color;
    }
    
    public function setKilometraje($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->kilometraje = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getKilometraje()
    {
		return $this->kilometraje;
    }
    
    public function setTransmision($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->transmision = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTransmision()
    {
		return $this->transmision;
    }
    
    public function setMotor($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->motor = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getMotor()
    {
		return $this->motor;
    }
    
    public function setVidriosElectricos($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->vidrios_electricos = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getVidriosElectricos()
    {
		return $this->vidrios_electricos;
    }

    public function setEspejosElectricos($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->espejos_electricos = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getEspejosElectricos()
    {
		return $this->espejos_electricos;
    }

    public function setAireAcondicionado($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->aire_acondicionado = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAireAcondicionado()
    {
		return $this->aire_acondicionado;
    }

    public function setBolsasAire($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->bolsas_aire = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getBolsasAire()
    {
		return $this->bolsas_aire;
    }
    
    public function setSistemaEco($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->sistema_eco = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSistemaEco()
    {
		return $this->sistema_eco;
    }
    
    public function setMandosTimon($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->mandos_timon = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getMandosTimon()
    {
		return $this->mandos_timon;
    }
    
    public function setRinesEspeciales($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->rines_especiales = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getRinesEspeciales()
    {
		return $this->rines_especiales;
    }
    
    public function setCamaraTrasera($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->camara_trasera = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCamaraTrasera()
    {
		return $this->camara_trasera;
    }

    public function setSensoresParqueo($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->sensores_parqueo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSensoresParqueo()
    {
		return $this->sensores_parqueo;
    }

    public function setBluetooth($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->bluetooth = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getBluetooth()
    {
		return $this->bluetooth;
    }

    public function setCombustible($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->combustible = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCombustible()
    {
		return $this->combustible;
    }

    public function setSunroof($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->sunroof = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSunroof()
    {
		return $this->sunroof;
    }

    public function setLucesXenon($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->luces_xenon = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getLucesXenon()
    {
		return $this->luces_xenon;
    }

    public function setCruiseControl($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->cruise_control = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCruiseControl()
    {
		return $this->cruise_control;
    }

    public function setMandoDistancia($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->mando_distancia = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getMandoDistancia()
    {
		return $this->mando_distancia;
    }

    public function setGPS($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->gps = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getGPS()
    {
		return $this->gps;
    }

    public function setTapiceriaCuero($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->tapiceria_cuero = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTapiceriaCuero()
    {
		return $this->tapiceria_cuero;
    }

    public function setDVDTrasero($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->dvd_trasero = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getDVDTrasero()
    {
		return $this->dvd_trasero;
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

    public function setPlaca($value)
    {
        if($this->validateAlphanumeric($value, 1, 15))
        {
			$this->placa = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getPlaca()
    {
		return $this->placa;
    }

    public function getVehiculos()
    {
        $sql = 'SELECT v.PK_id_vehiculo, v.FK_id_usuario, mv.modelos_vehiculo, mar.marca_vehiculo, v.anio, v.color, v.kilometraje, v.transmision, v.motor, v.vidrios_electricos, v.espejos_electricos, v.sistema_eco, v.mandos_timon, v.rines_especiales, v.camara_trasera, v.sensores_parqueo, v.bluetooth, v.combustible, v.sunroof, v.luces_xenon, v.cruise_control, v.mando_distancia, v.gps, v.tapiceria_cuero, v.dvd_trasero, v.valor, v.whatsapp, v.telefono, v.placa 
        FROM vehiculos v INNER JOIN modelos_vehiculos mv ON v.FK_id_modelo = mv.PK_id_modelo_vehiculo 
        INNER JOIN marcas_vehiculos mar ON mv.FK_id_marca_vehiculo = mar.PK_id_marca_vehiculo
        WHERE v.FK_id_usuario = ?';
        $params = array($this->FK_id_usuario);
        return Database::getRows($sql, $params);
    }

    public function createVehiculo()
    {
        $sql = 'INSERT INTO vehiculos(FK_id_usuario, FK_id_modelo, anio, color, kilometraje, transmision, motor, vidrios_electricos, espejos_electricos, aire_acondicionado, bolsas_aire, sistema_eco, mandos_timon, rines_especiales, camara_trasera, sensores_parqueo, bluetooth, combustible, sunroof, luces_xenon, cruise_control, mando_distancia, gps, tapiceria_cuero, dvd_trasero, valor, whatsapp, telefono, placa) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->FK_id_usuario, $this->FK_id_modelo, $this->anio, $this->color, $this->kilometraje, $this->transmision, $this->motor, $this->vidrios_electricos, $this->espejos_electricos, $this->aire_acondicionado, $this->bolsas_aire, $this->sistema_eco, $this->mandos_timon, $this->rines_especiales, $this->camara_trasera, $this->sensores_parqueo, $this->bluetooth, $this->combustible, $this->sunroof, $this->luces_xenon, $this->cruise_control, $this->mando_distancia, $this->gps, $this->tapiceria_cuero, $this->dvd_trasero, $this->valor, $this->whatsapp, $this->telefono, $this->placa);
        $vehiculo = Database::executeRow($sql, $params);
        if($vehiculo)
        {
            $this->PK_id_vehiculo = Database::getLastRowId();
        }
    }
}

?>