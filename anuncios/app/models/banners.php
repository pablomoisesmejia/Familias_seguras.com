<?php

class Banners extends Validator
{
    private $PK_id_banner = null;
    private $imagen = null;
    private $FK_id_intervalo_fecha = null;
    private $cant_intervalo_fecha = null;
    private $fecha_inicio = null;
    private $hora_inicio = null;
    private $estado_banner = null;
    private $dia_especifico = null;

    private $ruta = "../../web/img/productos/";

    public function setIdBanner($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_banner = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getIdBanner()
    {
		return $this->id;
    }
    
    public function setNombre($value)
    {
        if($this->validateAlphanumeric($value, 1, 50))
        {
			$this->nombre = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getNombre()
    {
		return $this->nombre;
	}
}
?>