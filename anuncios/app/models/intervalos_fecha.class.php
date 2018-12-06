<?php

class Intervalo_fecha extends Validator
{
    private $PK_id_intervalo_fecha = null;
    private $intervalos_fecha = null;

    public function setIdIntervaloFecha($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_intervalo_fecha = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdIntervaloFecha()
    {
		return $this->PK_id_intervalo_fecha;
    }

    public function setIntervaloFecha($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->intervalos_fecha = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIntervaloFecha()
    {
		return $this->intervalos_fecha;
    }
}

?>