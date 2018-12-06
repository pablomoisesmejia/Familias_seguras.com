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
}
?>