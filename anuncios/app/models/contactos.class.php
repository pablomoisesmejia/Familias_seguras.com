<?php

class Contactos extends Validator
{
    private $PK_id_contacto = null;
    private $nombres = null;
    private $telefono = null;
    private $correo = null;
    private $mensaje = null;
    private $FK_id_usuario = null;

    public function setIdContacto($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_contacto = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdContacto()
    {
		return $this->PK_id_contacto;
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
	public function getTelefono(){
		return $this->telefono;
    }

    public function setCorreo($value)
    {
        if($this->validateEmail($value, 1, 100))
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

    public function setMensaje($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->mensaje = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
	public function getMensaje(){
		return $this->mensaje;
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
    
    public function createContacto()
    {
        $sql = 'INSERT INTO contactos(nombres, telefono, correo, mensaje, FK_id_usuario) 
        VALUES (?, ?, ?, ?, ?)';
        $params = array($this->nombres, $this->telefono, $this->correo, $this->mensaje, $this->FK_id_usuario);
        return Database::executeRow($sql, $params);
    }
}

?>