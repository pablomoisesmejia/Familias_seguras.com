<?php

class Mensajes_Propiedades extends Validator
{
    private $PK_id_mensaje_prop = null;
    private $mensaje = null;
    private $correo = null;
    private $FK_id_propiedad = null;

    public function setIdMensaje($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_mensaje_prop= $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdMensaje()
    {
		return $this->PK_id_mensaje_prop;
    }
    
    public function setMensaje($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->mensaje = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getMensaje()
    {
		return $this->mensaje;
    }
    
    public function setCorreo($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
			$this->correo = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getCorreo()
    {
		return $this->correo;
    }
    
    public function setIdAnuncio($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_propiedad= $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdAnuncio()
    {
		return $this->FK_id_propiedad;
    }

    public function createMensaje()
    {
        $sql = 'INSERT INTO mensajes_propiedades(mensaje, correo, FK_id_propiedad) VALUES (?, ?, ?)';
        $params = array($this->mensaje, $this->correo, $this->FK_id_propiedad);
        $mensaje = Database::executeRow($sql, $params);
        if($mensaje)
        {
            $this->PK_id_mensaje_prop = Database::getLastRowId();
        }
    }
}