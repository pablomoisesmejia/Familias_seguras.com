<?php

class Dias_predeterminados extends Validator
{
    private $PK_id_dia_predeterminado = null;
    private $lunes = null;
    private $martes = null;
    private $miercoles = null;
    private $jueves = null;
    private $viernes = null;
    private $sabado = null;
    private $domingo = null;
    private $FK_id_banner = null;

    public function setIdDiaPredeterminado($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_dia_predeterminado = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdDiaPredeterminado()
    {
		return $this->PK_id_dia_predeterminado;
    }

    public function setLunes($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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
        if($this->validateAlphanumeric($value, 1, 11))
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

    public function setIdBanner($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->FK_id_banner = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdBanner()
    {
		return $this->FK_id_banner;
    }
}
?>