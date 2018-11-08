<?php

class Estado_Solicitud extends Validator
{
    private $PK_id_estado_solicitud = null;
    private $estado_solicitud = null;

    public function setIdEstadoSolicitud($value)
    {
        if($this->validateId($value))
        {
            $this->PK_id_estado_solicitud = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getIdEstadoSolicitud()
    {
        return $this->PK_id_estado_solicitud;
    }

    public function setEstadoSolicitud($value)
    {
        if($this->validateAlphanumeric($value, 1, 40))
        {
            $this->estado_solicitud = $value;
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getEstadoSolicitud()
    {
        return $this->estado_solicitud;
    }
}
?>