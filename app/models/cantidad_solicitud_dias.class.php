<?php

class Cantidad_Solicitud_Dias extends Validator
{
    //DECLARACION DE VARIABLES PRIVADAS
    private $PK_id_cantidad_solicitud_dias = null;
    private $lunes = null;
    private $martes = null;
    private $miercoles = null;
    private $jueves = null;
    private $viernes = null;
    private $sabado = null;
    private $domingo = null;

    private $cant_lunes = null;
    private $cant_martes = null;
    private $cant_miercoles = null;
    private $cant_jueves = null;
    private $cant_viernes = null;
    private $cant_sabado = null;
    private $cant_domingo = null;

    private $cant_castigo_lunes = null;
    private $cant_castigo_martes = null;
    private $cant_castigo_miercoles = null;
    private $cant_castigo_jueves = null;
    private $cant_castigo_viernes = null;
    private $cant_castigo_sabado = null;
    private $cant_castigo_domingo = null;

    private $fecha_castigo_lunes = null;
    private $fecha_castigo_martes = null;
    private $fecha_castigo_miercoles = null;
    private $fecha_castigo_jueves = null;
    private $fecha_castigo_viernes = null;
    private $fecha_castigo_sabado = null;
    private $fecha_castigo_domingo = null;

    //Metodos para sobre carga de propiedades
    public function setId($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_cantidad_solicitud_dias = $value;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function setLunes($value)
    {
        if($this->validateNumeric($value, 1, 10))
        {
            $this->lunes = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getLuner()
    {
        return $this->lunes;
    }
}
?>