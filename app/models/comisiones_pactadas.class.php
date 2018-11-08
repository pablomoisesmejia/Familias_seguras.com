<?php

class Comisiones_Pactadas extends Validator
{
    private $PK_id_comision_pactada = null;
    private $fecha_comision = null;
    private $comision = null;
    private $FK_id_usuario = null;

    public function setIdComisionPactada($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_comision_pactada= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdComisionPactada()
	{
		return $this->PK_id_comision_pactada;
    }

    public function setFechaComision($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_comision= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaComision()
	{
		return $this->fecha_comision;
    }

    public function setComision($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->comision= $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getComision()
	{
		return $this->comision;
    }

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario= $value;
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