<?php

class Companias_Interes extends Validator
{
    private $PK_id_compania_interes = null;
    private $compania_interes = null;
    private $numero_seleccion = null;
    private $FK_id_cliente_prospecto = null;

    public function setIdCompaniaInteres($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_compania_interes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdCompaniaInteres()
    {
        return $this->PK_id_compania_interes;
    }

    public function setCompaniaInteres($value)
    {
        if($this->validateAlphanumeric($value, 1, 30))
        {
            $this->compania_interes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCompaniaInteres()
    {
        return $this->compania_interes;
    }

    public function setNumeroSeleccion($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
            $this->numero_seleccion = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getNumeroSeleccion()
    {
        return $this->numero_seleccion;
    }

    public function setIdClienteProspecto($value)
    {
        if($this->validateId($value))
        {
            $this->FK_id_cliente_prospecto = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdClienteProspecto()
    {
        return $this->FK_id_cliente_prospecto;
    }
}
?>