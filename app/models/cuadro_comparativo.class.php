<?php

class Cuadro_Comparativo extends Validator
{
    private $PK_id_cuadro_comparativo = null;
    private $FK_id_aseguradora = null;
    private $plan = null;
    private $oferta = null;
    private $FK_id_cliente_prospecto = null;
    private $valor_recuperacion_50 = null;
    private $valor_recuperacion_60 = null;
    private $valor_recuperacion_70 = null;

    public function setIdCuadroComparativo($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_cuadro_comparativo = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdCuadroComparativo()
    {
        return $this->PK_id_cuadro_comparativo;
    }

    public function setIdAseguradora($value)
    {
        if($this->validateId($value))
        {
            $this->FK_id_aseguradora = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdAseguradora()
    {
        return $this->FK_id_aseguradora;
    }

    public function setPlan($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
            $this->plan = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getPlan()
    {
        return $this->plan;
    }

    public function setOferta($value)
    {
        if($this->validateAlphanumeric($value, 1, 100))
        {
            $this->oferta = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getOferta()
    {
        return $this->oferta;
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

    public function setValorRecuperacion50($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_50 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion50()
    {
        return $this->valor_recuperacion_50;
    }

    public function setValorRecuperacion60($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_60 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion60()
    {
        return $this->valor_recuperacion_60;
    }

    public function setValorRecuperacion70($value)
    {
        if($this->validateAlphanumeric($value, 1, 20))
        {
            $this->valor_recuperacion_70 = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getValorRecuperacion70()
    {
        return $this->valor_recuperacion_70;
    }
}
?>