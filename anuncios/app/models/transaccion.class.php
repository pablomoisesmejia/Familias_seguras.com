<?php

class Transaccion extends Validator
{
    private $PK_id_transaccion = null;
    private $transaccion = null;

    public function setIdTransaccion($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_transaccion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdTransaccion()
    {
		return $this->PK_id_transaccion;
    }
    
    public function setTransaccion($value)
    {
        if($this->validateAlphanumeric($value, 1, 25))
        {
			$this->transaccion = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getTransaccion()
    {
		return $this->transaccion;
	}
}

?>