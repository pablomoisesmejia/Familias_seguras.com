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
        else
        {
			return false;
		}
	}
    public function getIdBanner()
    {
		return $this->PK_id_banner;
    }
    
    public function setImagen($file)
	{
		if($this->validateImage($file, $this->imagen, 5000, 5000))
		{
			$this->imagen = $this->getImageName();
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getImagen()
	{
		return $this->imagen;
	}

    public function getRuta()
    {
        return $this->ruta;
    }
    
    public function setIdIntervaloFecha($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_intervalo_fecha = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getIdIntervaloFecha()
    {
		return $this->FK_id_intervalo_fecha;
    }

    public function setCantIntervaloFecha($value)
    {
        if($this->validateId($value))
        {
			$this->cant_intervalo_fecha = $value;
			return true;
        }
        else{
			return false;
		}
	}
    public function getCantIntervaloFecha()
    {
		return $this->cant_intervalo_fecha;
    }

    public function setFechaInicio($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->fecha_inicio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getFechaInicio()
    {
		return $this->fecha_inicio;
    }
    
    public function setHoraInicio($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->hora_inicio = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getHoraInicio()
    {
		return $this->hora_inicio;
    }

    public function setEstadoBanner($value)
    {
        if($this->validateAlphanumeric($value, 1, 11))
        {
			$this->estado_banner = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getEstadoBanner()
    {
		return $this->estado_banner;
    }

    public function setDiaEspecifico($value)
    {
        if($this->validateAlphanumeric($value, 1, 10))
        {
			$this->dia_especifico = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getDiaEspecifico()
    {
        return $this->dia_especifico;
    }
}
?>