<?php

class Solicitudes_atencion_cliente extends Validator
{
    private $PK_id_solicitud = null;
    private $FK_id_cliente_prospecto = null;
    private $fecha_reparticion = null;
    private $hora_reparticion = null;
    private $FK_id_estado_solicitud = null;
    private $FK_id_estado_correo = null;
    private $fecha_envio = null;
    private $hora_envio = null;
    private $observaciones = null;
    private $comentario = null;
    private $interpretacion_recomendacion = null;

    public function setIdSolicitud($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_solicitud = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdSolicitud()
	{
		return $this->PK_id_solicitud;
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
    

    public function setFechaReparticion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_reparticion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaReparticion()
	{
		return $this->fecha_reparticion;
    }
    
    public function setHoraReparticion($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->hora_reparticion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getHoraReparticion()
	{
		return $this->hora_reparticion;
	}
    
    public function setIdEstadoSolicitud($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_estado_solicitud = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEstadoSolicitud()
	{
		return $this->FK_id_estado_solicitud;
    }
    
    public function setIdEstadoCorreo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_estado_correo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEstadoCorreo()
	{
		return $this->FK_id_estado_correo;
    }
    
    public function setFechaEnvio($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->fecha_envio = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getFechaEnvio()
	{
		return $this->fecha_envio;
    }
    
    public function setHoraEnvio($value)
	{
		if($this->validateAlphanumeric($value, 1, 10))
		{
			$this->hora_envio = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getHoraEnvio()
	{
		return $this->hora_envio;
    }
    
    public function setObservaciones($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->observaciones = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getObservaciones()
	{
		return $this->observaciones;
    }
    
    public function setComentario($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->comentario = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getComentario()
	{
		return $this->comentario;
    }
    
    public function setInterpretacionRecomendacion($value)
	{
		if($this->validateAlphanumeric($value, 1, 500))
		{
			$this->interpretacion_recomendacion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getInterpretacionRecomendacion()
	{
		return $this->interpretacion_recomendacion;
	}

	public function createSolicitudAtencionCliente()
	{
		$sql = 'INSERT INTO solicitudes_atencion_cliente(FK_id_cliente_prospecto, fecha_reparticion, hora_reparticion, FK_id_estado_correo, FK_id_estado_solicitud, fecha_envio, hora_envio, observaciones, comentario, interpretacion_recomendacion) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$params = array($this->FK_id_cliente_prospecto, $this->fecha_reparticion, $this->hora_reparticion, $this->FK_id_estado_correo, $this->FK_id_estado_solicitud, $this->fecha_envio, $this->hora_envio, $this->observaciones, $this->comentario, $this->interpretacion_recomendacion);
		return Database::executeRow($sql, $params);
	}
}
?>