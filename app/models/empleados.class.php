<?php
class Empleados extends Validator
{
    private $PK_id_empleado = null;
    private $FK_id_usuario = null;
    private $FK_id_cargo_gerencia = null;
	private $activo_reparticion = null;

	private $tipo = null;
	private $usuario = null;
	private $clave = null;

    public function setIdEmpleado($value)
	{
		if($this->validateId($value))
		{
			$this->PK_id_empleado = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdEmpleado()
	{
		return $this->PK_id_empleado;
    }

    public function setIdUsuario($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_usuario = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdUsuario()
	{
		return $this->FK_id_usuario;
    }

    public function setIdCargo($value)
	{
		if($this->validateId($value))
		{
			$this->FK_id_cargo_gerencia = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getIdCargo()
	{
		return $this->FK_id_cargo_gerencia;
    }

	public function setActivo($value)
	{
		if($this->validateAlphanumeric($value, 1, 2))
		{
			$this->activo_reparticion = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getActivo()
	{
		return $this->activo_reparticion;
	}

	public function setTipo($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->tipo = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getTipo()
	{
		return $this->tipo;
	}

	public function setUsuario($value)
	{
		if($this->validateAlphanumeric($value, 1, 50))
		{
			$this->usuario = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setClave($value)
	{
		if($this->validateAlphanumeric($value, 1, 100))
		{
			$this->clave = $value;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getClave()
	{
		return $this->clave;
	}
	

	//FUNCIONES PARA LAS TAREAS PROGRAMADAS
	
	//FIN DE FUNCIONES PARA LAS TAREAS PROGRAMADAS


	//Funciones para inicio de sesion
	public function checkUsuarios($usuario){
		$sql = "SELECT PK_id_empleado, PK_id_usuario, correo FROM empleados, usuarios WHERE (usuarios.PK_id_usuario = empleados.FK_id_usuario) AND usuarios.correo = ?";
		$params = array($usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->PK_id_empleado = $data['PK_id_empleado'];
			$this->FK_id_usuario = $data['PK_id_usuario'];
			return true;
		}else{
			return false;
		}
	}

	public function checkContrasena(){
		$sql = "SELECT clave, FK_id_tipo_team, usuario FROM usuarios, empleados WHERE (empleados.FK_id_usuario = usuarios.PK_id_usuario) AND PK_id_empleado = ?";
		$params = array($this->PK_id_empleado);
		$data = Database::getRow($sql, $params);
		if($data)
        {
            if(strlen($data['clave']) == 60)
            {
                if(password_verify($this->clave, $data['clave']))
                {
					$this->tipo = $data['FK_id_tipo_team'];
					$this->usuario = $data['usuario'];
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                if($this->clave == $data['clave'])
                {
					$this->clave = $data['clave'];
					$this->tipo = $data['FK_id_tipo_team'];
					$this->usuario = $data['usuario'];
					$this->encryptContraseña();
                    return true;
                }
                else
                {
                    return false;
                }                
            }			
        }
        else
        {
			return false;
		}
	}

	public function encryptContraseña()
    {
        $hash = password_hash($this->clave, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET clave = ? WHERE PK_id_usuario = ?";
        $params = array($hash, $this->FK_id_usuario);
        return Database::executeRow($sql, $params);
	}
	

	public function logOut(){
		return session_destroy();
	}

	//Funciones
	public function getEmpleados(){
		$sql = "SELECT * FROM empleados";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function createEmpleado()
	{
		$sql = 'INSERT INTO empleados(FK_id_usuario, FK_id_cargo_gerencia, activo_reparticion) 
		VALUES (?, ?, ?)';
		$params = array($this->FK_id_usuario, $this->FK_id_cargo_gerencia, $this->activo_reparticion);
		$empleado = Database::executeRow($sql, $params);
		if($empleado)
		{
			$this->PK_id_empleado = Database::getLastRowId();
		}
	}
}
?>