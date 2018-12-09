<?php

class Imagen_propiedad extends Validator
{
    private $PK_id_imagen_propiedad = null;
    private $nombre_imagen_prop = null;
    private $FK_id_propiedad = null;

    private $ruta = '../../../../web/img/propiedades/';

    public function setIdImagenPropiedad($value)
    {
        if($this->validateId($value))
        {
			$this->PK_id_imagen_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIdImagenPropiedad()
    {
		return $this->PK_id_imagen_propiedad;
    }

    public function setNombreImagenProp($value)
    {
        if($this->validateAlphanumeric($value, 1, 100))
        {
			$this->nombre_imagen_prop = $value;
			return true;
        }
        else
        {
			return false;
		}
    }

    public function getRuta()
    {
        return $this->ruta;
    }
    
    public function getNombreImagenProp()
    {
		return $this->nombre_imagen_prop;
    }

    public function setIdPropiedad($value)
    {
        if($this->validateId($value))
        {
			$this->FK_id_propiedad = $value;
			return true;
        }
        else
        {
			return false;
		}
	}
    public function getIPropiedad()
    {
		return $this->FK_id_propiedad;
    }

    public function createImgPropiedad()
    {
        $sql = 'INSERT INTO imagenes_propiedad(nombre_imagen_prop, FK_id_propiedad) VALUES (?, ?)';
        $params = array($this->nombre_imagen_prop, $this->FK_id_propiedad);
        return Database::executeRow($sql, $params);
    }
}

?>