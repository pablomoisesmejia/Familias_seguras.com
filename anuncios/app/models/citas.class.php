<?php

class Citas extends Validator
{
    private $PK_id_cita = null;
    private $title = null;
    private $nombres = null;
    private $correo = null;
    private $color = 'rgb(117, 38, 120)';
    private $textColor = 'white';
    private $start = null;
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

    public function getCitas()
    {
        $sql = 'SELECT PK_id_cita, title, nombres, correo, color, textColor, start, lugar_reunion, asunto, FK_id_usuario FROM citas c INNER JOIN usuarios_anuncios ua ON c.FK_id_usuario = ua.id_usuario WHERE ua.id_usuario = ?';
        $params = array($this->FK_id_usuario);
        return Database::getRows($sql, $params);
    }

    public function createCita()
    {
        $sql = 'INSERT INTO citas(title, nombres, correo, color, textColor, start, lugar_reunion, asunto, FK_id_usuario) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->title, $this->nombres, $this->correo, $this->color, $this->textColor, $this->start, $this->lugar_reunion, $this->asunto, $this->FK_id_usuario);
        return Database::executeRow($sql, $params);
    }
}

?>