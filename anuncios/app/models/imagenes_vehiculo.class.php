<?php

class Imagen_vehiculo extends Validator
{
    private $PK_id_imagen_vehiculo = null;
    private $nombre_imagen = null;
    private $FK_id_vehiculo = null;

    private $ruta = '../../../../web/img/vehiculos/';

    public function setIdImagenVehiculo($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_imagen_vehiculo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdImagenVehiculo()
    {
		return $this->PK_id_imagen_vehiculo;
    }

    public function setNombreImagen($value)
    {
        if($this->validateAlphanumeric($value, 1, 100))
        {
			$this->nombre_imagen = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getNombreImagen()
    {
		return $this->nombre_imagen;
    }

    public function getRuta()
    {
        return $this->ruta;
    }

    public function setIdVehiculo($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_vehiculo = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdVehiculo()
    {
		return $this->FK_id_vehiculo;
    }

    public function createImgVehiculo()
    {
        $sql = 'INSERT INTO imagenes_vehiculo(nombre_imagen, FK_id_vehiculo) VALUES(?, ?)';
        $params = array($this->nombre_imagen, $this->FK_id_vehiculo);
        return Database::executeRow($sql, $params);
    }
}

?>