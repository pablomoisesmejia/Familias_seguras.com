<?php

class Cometarios extends Validator
{
    private $PK_id_comentario = null;
    private $comentario = null;
    private $correo = null;
    private $FK_id_anuncio = null;

    public function setIdComentario($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_comentario= $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdComentario()
    {
		return $this->PK_id_comentario;
    }
    
    public function setComentario($value)
    {
        if($this->validateAlphanumeric($value, 1, 1000))
        {
			$this->comentario = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getComentario()
    {
		return $this->comentario;
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
			$this->FK_id_anuncio= $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdAnuncio()
    {
		return $this->FK_id_anuncio;
    }

    public function createComentario()
    {
        $sql = 'INSERT INTO comentarios(comentario, correo, FK_id_anuncio) VALUES (?, ?, ? )';
        $params = array($this->comentario, $this->correo, $this->FK_id_anuncio);
        $comentario = Database::executeRow($sql, $params);
        if($comentario)
        {
            $this->PK_id_comentario = Database::getLastRowId();
        }
    }
}

?>