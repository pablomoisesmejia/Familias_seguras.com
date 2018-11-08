<?php

class Cantidad_Solicitud_Dias extends Validator
{
    //DECLARACION DE VARIABLES PRIVADAS
    private $PK_id_cantidad_solicitud_dias = null;
    private $lunes = null;
    private $martes = null;
    private $miercoles = null;
    private $jueves = null;
    private $viernes = null;
    private $sabado = null;
    private $domingo = null;

    private $cant_lunes = null;
    private $cant_martes = null;
    private $cant_miercoles = null;
    private $cant_jueves = null;
    private $cant_viernes = null;
    private $cant_sabado = null;
    private $cant_domingo = null;

    private $cant_castigo_lunes = null;
    private $cant_castigo_martes = null;
    private $cant_castigo_miercoles = null;
    private $cant_castigo_jueves = null;
    private $cant_castigo_viernes = null;
    private $cant_castigo_sabado = null;
    private $cant_castigo_domingo = null;

    private $fecha_castigo_lunes = null;
    private $fecha_castigo_martes = null;
    private $fecha_castigo_miercoles = null;
    private $fecha_castigo_jueves = null;
    private $fecha_castigo_viernes = null;
    private $fecha_castigo_sabado = null;
    private $fecha_castigo_domingo = null;

    //Metodos para sobre carga de propiedades
    public function setId($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_cantidad_solicitud_dias = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getId()
    {
        return $this->$PK_id_cantidad_solicitud_dias;
    }

    public function setLunes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->lunes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getLunes()
    {
        return $this->lunes;
    }

    public function setMartes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->martes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getMartes()
    {
        return $this->martes;
    }

    public function setMiercoles($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->miercoles = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getMiercoles()
    {
        return $this->miercoles;
    }

    public function setJueves($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->jueves = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getJueves()
    {
        return $this->jueves;
    }

    public function setViernes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->viernes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getViernes()
    {
        return $this->viernes;
    }

    public function setSabado($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->sabado = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getSabado()
    {
        return $this->sabado;
    }

    public function setDomingo($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->domingo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getDomingo()
    {
        return $this->domingo;
    }

////////////////////////////////////////////////////////////
    public function setCantidadLunes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_lunes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadLunes()
    {
        return $this->cant_lunes;
    }

    public function setCantidadMartes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_martes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadMartes()
    {
        return $this->cant_martes;
    }

    public function setCantidadMiercoles($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_miercoles = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadMiercoles()
    {
        return $this->cant_miercoles;
    }

    public function setCantidadJueves($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_jueves = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadJueves()
    {
        return $this->cant_jueves;
    }

    public function setCantidadViernes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_viernes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadViernes()
    {
        return $this->cant_viernes;
    }

    public function setCantidadSabado($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_sabado = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadSabado()
    {
        return $this->cant_sabado;
    }

    public function setCantidadDomingo($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_domingo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadDomingo()
    {
        return $this->cant_domingo;
    }

    //////////////////////////////////////////////////////////
    public function setCantidadCastigoLunes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_lunes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoLunes()
    {
        return $this->cant_castigo_lunes;
    }

    public function setCantidadCastigoMartes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_martes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoMartes()
    {
        return $this->cant_castigo_martes;
    }

    public function setCantidadCastigoMiercoles($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_miercoles = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoMiercoles()
    {
        return $this->cant_castigo_miercoles;
    }

    public function setCantidadCastigoJueves($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_jueves = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoJueves()
    {
        return $this->cant_castigo_jueves;
    }

    public function setCantidadCastigoViernes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_viernes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoViernes()
    {
        return $this->cant_castigo_viernes;
    }

    public function setCantidadCastigoSabado($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_sabado = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoSabado()
    {
        return $this->cant_castigo_sabado;
    }

    public function setCantidadCastigoDomingo($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->cant_castigo_domingo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCantidadCastigoDomingo()
    {
        return $this->cant_castigo_domingo;
    }

    ////////////////////////////////////////////////////////////////////////
    public function setFechaCastigoLunes($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_lunes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoLunes()
    {
        return $this->fecha_castigo_lunes;
    }

    public function setFechaCastigoMartes($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_martes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoMartes()
    {
        return $this->fecha_castigo_martes;
    }

    public function setFechaCastigoMiercoles($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_miercoles = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoMiercoles()
    {
        return $this->fecha_castigo_miercoles;
    }

    public function setFechaCastigoJueves($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_jueves = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoJueves()
    {
        return $this->fecha_castigo_jueves;
    }

    public function setFechaCastigoViernes($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_viernes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoViernes()
    {
        return $this->fecha_castigo_viernes;
    }

    public function setFechaCastigoSabado($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_sabado = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoSabado()
    {
        return $this->fecha_castigo_sabado;
    }

    public function setFechaCastigoDomingo($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->fecha_castigo_domingo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getFechaCastigoDomingo()
    {
        return $this->fecha_castigo_domingo;
    }
}
?>