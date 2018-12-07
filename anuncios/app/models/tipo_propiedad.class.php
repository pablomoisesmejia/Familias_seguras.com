<?php

class Tipo_propiedad extends Validator
{
    private $PK_id_tipo_propiedad = null;
    private $tipo_propiedad = null;

    public function setIdTipoPropiedad($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_tipo_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdTipoPropiedad()
    {
		return $this->PK_id_tipo_propiedad;
    }
    
    public function setTipoPropiedad($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->tipo_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTipoPropiedad()
    {
		return $this->tipo_propiedad;
	}
}

?>