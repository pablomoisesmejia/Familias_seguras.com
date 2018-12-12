<?php

class Citas extends Validator
{
    private $PK_id_cita = null;
    private $title = null;
    private $nombres = null;
    private $correo = null;
    private $color = null;
    private $textColor = null;
    private $start = null;
    private $end = null;
    private $lugar_reunion = null;
    private $asunto = null;
    private $FK_id_usuario = null;

    public function setIdCita($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_cita = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdCita()
    {
		return $this->PK_id_cita;
    }

    public function setTitulo($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
			$this->title = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getTitulo(){
		return $this->title;
    }

    public function setNombres($value)
    {
        if($this->validateAlphanumeric($value, 1, 100))
        {
			$this->nombres = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
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
	public function getCorreo(){
		return $this->correo;
    }

    public function setColor($value)
    {
        if($this->validateAlphanumeric($value, 1, 15))
        {
			$this->color = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getColor(){
		return $this->color;
    }

    public function setTextColor($value)
    {
        if($this->validateAlphanumeric($value, 1, 15))
        {
			$this->textColor = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getTextColor(){
		return $this->textColor;
    }

    public function setStart($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
			$this->start = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getStart(){
		return $this->start;
    }

    public function setEnd($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
			$this->end = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getEnd(){
		return $this->end;
    }

    public function setLugarReunion($value)
    {
        if($this->validateAlphanumeric($value, 1, 100))
        {
			$this->lugar_reunion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getLugarReunion(){
		return $this->lugar_reunion;
    }

    public function setAsunto($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->asunto = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getAsunto(){
		return $this->asunto;
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
}

?>