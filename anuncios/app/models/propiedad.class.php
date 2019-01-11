<?php

class Propiedad extends Validator
{
    private $PK_id_propiedad = null;
    private $FK_id_tipo_propiedad = null;
    private $FK_id_usuario = null;
    private $FK_id_transaccion = null;
    private $FK_id_colonia = null;
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
    private $comunidad_privada = 0;
    private $piscina = 0;
    private $cancha_basketball = 0;
    private $cancha_tennis = 0;
    private $cancha_futbol = 0;
    private $gimnasio = 0;
    private $spa_sauna = 0;
    private $barbacoa = 0;
    private $deck = 0;
    private $sistema_riego = 0;
    private $ac_central = 0;
    private $ac_independiente = 0;
    private $atico = 0;
    private $portico = 0;
    private $sotano = 0;
    private $bodega = 0;
    private $estudio = 0;
    private $area_sevicio = 0;
    private $pantrie = 0;
    private $closets = 0;
    private $walking_closet = 0;
    private $cocina_isla = 0;
    private $desayunador = 0;
    private $terraza_nivel_inferior = 0;
    private $terraza_nivel_superior = 0;
    private $sala_nivel_superior = 0;
    private $calentador_agua = 0;
    private $cisterna = 0;
    private $triturador_basura = 0;
    private $lavadora_platos = 0;
    private $sistema_gas = 0;
    private $conexion = 0;
    private $paneles_solares = 0;
    private $ventiladores_techo = 0;
    private $acceso_discapacitados = 0;
    private $ascensor = 0;


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

    public function setIdColonia($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
			$this->FK_id_colonia = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdColonia()
    {
		return $this->FK_id_colonia;
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

    public function setComunidadPrivada($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->comunidad_privada = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getComunidadPrivada()
    {
		return $this->comunidad_privada;
    }

    public function setPiscina($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->piscina = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getPiscina()
    {
		return $this->piscina;
    }

    public function setCanchaBasketball($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->cancha_basketball = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCanchaBasketball()
    {
		return $this->cancha_basketball;
    }

    public function setCanchaTennis($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->cancha_tennis = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCanchaTennis()
    {
		return $this->cancha_tennis;
    }

    public function setCanchaFutbol($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->cancha_futbol = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCanchaFutbol()
    {
		return $this->cancha_futbol;
    }

    public function setGimnasio($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->gimnasio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getGimnasio()
    {
		return $this->gimnasio;
    }

    public function setSpa($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->spa_sauna = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSpa()
    {
		return $this->spa_sauna;
    }

    public function setBarbacoa($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->barbacoa = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getBarbacoa()
    {
		return $this->barbacoa;
    }

    public function setDeck($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->deck = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getDeck()
    {
		return $this->deck;
    }

    public function setSistemaRiego($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->sistema_riego = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSistemaRiego()
    {
		return $this->sistema_riego;
    }

    public function setACCentral($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->ac_central = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getACCentral()
    {
		return $this->ac_central;
    }

    public function setACIndependiente($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->ac_independiente = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getACIndependiente()
    {
		return $this->ac_independiente;
    }

    public function setAtico($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->atico = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAtico()
    {
		return $this->atico;
    }

    public function setPortico($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->portico = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getPortico()
    {
		return $this->portico;
    }

    public function setSotano($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->sotano = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSotano()
    {
		return $this->sotano;
    }

    public function setBodega($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->bodega = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getBodega()
    {
		return $this->bodega;
    }

    public function setEstudio($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->estudio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getEstudio()
    {
		return $this->estudio;
    }

    public function setAreaServicio($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->area_sevicio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAreaServicio()
    {
		return $this->area_sevicio;
    }

    public function setPantrie($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->pantrie = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getPantrie()
    {
		return $this->pantrie;
    }

    public function setClosets($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->closets = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getClosets()
    {
		return $this->closets;
    }

    public function setWalkingCloset($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->walking_closet= $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getWalkingCloset()
    {
		return $this->walking_closet;
    }

    public function setCocinaIsla($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->cocina_isla = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCocinaIsla()
    {
		return $this->cocina_isla;
    }

    public function setDesayunador($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->desayunador = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getDesayunador()
    {
		return $this->desayunador;
    }

    public function setTerrazaInferior($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->terraza_nivel_inferior = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTerrazaInferior()
    {
		return $this->terraza_nivel_inferior;
    }

    public function setTerrazaSuperior($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->terraza_nivel_superior = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTerrazaSuperior()
    {
		return $this->terraza_nivel_superior;
    }

    public function setSalaSuperior($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->sala_nivel_superior = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSalaSuperior()
    {
		return $this->sala_nivel_superior;
    }

    public function setCalentadorAgua($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->calentador_agua = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCalentadorAgua()
    {
		return $this->calentador_agua;
    }

    public function setCisterna($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->cisterna = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getCisterna()
    {
		return $this->cisterna;
    }

    public function setTrituradorBasura($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->triturador_basura = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTrituradorBasura()
    {
		return $this->triturador_basura;
    }

    public function setLavadoraPlatos($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->lavadora_platos = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getLavadoraPlatos()
    {
		return $this->lavadora_platos;
    }

    public function setSistemaGas($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->sistema_gas = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getSistemaGas()
    {
		return $this->sistema_gas;
    }

    public function setConexion($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->conexion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getConexion()
    {
		return $this->conexion;
    }

    public function setPanelesSolares($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->paneles_solares = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getPanelesSolares()
    {
		return $this->paneles_solares;
    }

    public function setVentiladoresTecho($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->ventiladores_techo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getVentiladoresTecho()
    {
		return $this->ventiladores_techo;
    }

    public function setAccesoDiscapacitados($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->acceso_discapacitados = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAccesoDiscapacitados()
    {
		return $this->acceso_discapacitados;
    }

    public function setAscensor($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->ascensor = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getAscensor()
    {
		return $this->ascensor;
    }

    public function getColonias()
    {
        $sql = 'SELECT PK_id_colonia, colonia FROM colonias';
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    public function getCorreoUsuario()
    {
        $sql = 'SELECT ua.id_usuario, ua.correo_usuario FROM usuarios_anuncios ua INNER JOIN propiedades p ON ua.id_usuario = p.FK_id_usuario WHERE p.PK_id_propiedad = ?';
        $params = array($this->PK_id_propiedad);
        return Database::getRow($sql, $params);
    }
    
    public function getPropiedades()
    {
        $sql = 'SELECT p.PK_id_propiedad, tp.tipo_propiedad, p.FK_id_usuario, t.transaccion, c.colonia, p.municipio, p.departamento, p.terreno, p.construccion, p.niveles, p.habitaciones, p.baños, p.cochera, p.descripcion, p.valor
        FROM propiedades p INNER JOIN tipo_propiedad tp ON p.FK_id_tipo_propiedad = tp.PK_id_tipo_propiedad 
        INNER JOIN transaccion t ON p.FK_id_transaccion = t.PK_id_transaccion
        INNER JOIN colonias c ON p.FK_id_colonia = c.PK_id_colonia
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
        $sql = 'SELECT p.PK_id_propiedad, p.FK_id_usuario, tp.tipo_propiedad, t.transaccion, c.colonia, p.municipio, p.departamento, p.terreno, p.construccion, p.niveles, p.habitaciones, p.baños, p.cochera, p.descripcion, p.valor, ua.whatsapp, ua.telefono, p.comunidad_privada, p.piscina, p.cancha_basketball, p.cancha_tennis, p.cancha_futbol, p.gimnasio, p.spa_sauna, p.barbacoa, p.deck, p.sistema_riego, p.ac_central, p.ac_independiente, p.atico, p.portico, p.sotano, p.bodega, p.estudio, p.area_servicio, p.pantrie, p.closets, p.walking_closet, p.cocina_isla, p.desayunador, p.terraza_nivel_inferior, p.terraza_nivel_superior, p.sala_nivel_superior, p.calentador_agua, p.cisterna, p.triturador_basura, p.lavadora_platos, p.sistema_gas, p.conexion, p.paneles_solares, p.ventiladores_techo, p.acceso_discapacitados, p.ascensor
        FROM propiedades p INNER JOIN tipo_propiedad tp ON p.FK_id_tipo_propiedad = tp.PK_id_tipo_propiedad 
        INNER JOIN transaccion t ON p.FK_id_transaccion = t.PK_id_transaccion 
        INNER JOIN usuarios_anuncios ua ON p.FK_id_usuario = ua.id_usuario
        INNER JOIN colonias c ON p.FK_id_colonia = c.PK_id_colonia
        WHERE p.PK_id_propiedad = ? ';
        $params = array($this->PK_id_propiedad);
        return Database::getRow($sql, $params);
    }

    public function getPropiedadesTransaccion($filtro, $orden)
    {
        $sql = 'SELECT p.PK_id_propiedad, c.colonia, p.municipio, p.departamento, p.niveles, p.habitaciones, p.baños, p.cochera, p.valor, ip.nombre_imagen_prop
        FROM propiedades p LEFT JOIN imagenes_propiedad ip ON p.PK_id_propiedad = ip.FK_id_propiedad
        INNER JOIN colonias c ON p.FK_id_colonia = c.PK_id_colonia
        WHERE FK_id_transaccion = ? '.$filtro.'  GROUP BY p.PK_id_propiedad '.$orden.'';
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
        $sql = 'INSERT INTO propiedades(FK_id_tipo_propiedad, FK_id_usuario, FK_id_transaccion, FK_id_colonia, municipio, departamento, terreno, construccion, niveles, habitaciones, baños, cochera, descripcion, valor, fecha_creacion, comunidad_privada, piscina, cancha_basketball, cancha_tennis, cancha_futbol, gimnasio, spa_sauna, barbacoa, deck, sistema_riego, ac_central, ac_independiente, atico, portico, sotano, bodega, estudio, area_servicio, pantrie, closets, walking_closet, cocina_isla, desayunador, terraza_nivel_inferior, terraza_nivel_superior, sala_nivel_superior, calentador_agua, cisterna, triturador_basura, lavadora_platos, sistema_gas, conexion, paneles_solares, ventiladores_techo, acceso_discapacitados, ascensor) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->FK_id_tipo_propiedad, $this->FK_id_usuario, $this->FK_id_transaccion, $this->FK_id_colonia, $this->municipio, $this->departamento, $this->terreno, $this->construccion, $this->niveles, $this->habitaciones, $this->baños, $this->cochera, $this->descripcion, $this->valor, $fecha, $this->comunidad_privada, $this->piscina, $this->cancha_basketball, $this->cancha_tennis, $this->cancha_futbol, $this->gimnasio, $this->spa_sauna, $this->barbacoa, $this->deck, $this->sistema_riego, $this->ac_central, $this->ac_independiente, $this->atico, $this->portico, $this->sotano, $this->bodega, $this->estudio, $this->area_sevicio, $this->pantrie, $this->closets, $this->walking_closet, $this->cocina_isla, $this->desayunador, $this->terraza_nivel_inferior, $this->terraza_nivel_superior, $this->sala_nivel_superior, $this->calentador_agua, $this->cisterna, $this->triturador_basura, $this->lavadora_platos, $this->sistema_gas, $this->conexion, $this->paneles_solares, $this->ventiladores_techo, $this->acceso_discapacitados, $this->ascensor);
        $propiedad = Database::executeRow($sql, $params);
        if($propiedad)
        {
            $this->PK_id_propiedad = Database::getLastRowId();
        }
    }
}

?>