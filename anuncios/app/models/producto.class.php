<?php
class Producto extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $id_usuario = null;
	private $nombre_anuncio = null;
	private $direccion = null;
	private $imagen_producto = null;
	private $estado_anuncio = null;
	private $id_categoria = null;
	private $id_plan = null;
	private $municipio = null;
	private $departamento = null;
	private $tel_fijo = null;
	private $celular = null;
	private $whatsapp = null;
	private $email_anuncio = null;
	private $numero_identidad= null;
	private $facebook = null;
	private $instagram = null;
	private $pagina_web = null;
	private $ruta = "../../web/img/anuncios/";

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}

	public function setId_usuario($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_usuario(){
		return $this->id_usuario;
	}
	
	
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre_anuncio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre_anuncio;
	}

	public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
	}

	public function setImagen($file)
	{
		if($this->validateImage($file, $this->imagen_producto, 5000, 5000))
		{
			$this->imagen_producto = $this->getImageName();
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getImagen()
	{
		return $this->imagen_producto;
	}

    public function getRuta()
    {
        return $this->ruta;
    }

	public function setEstadoAnuncio($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->estado_anuncio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstadoAnuncio(){
		return $this->estado_anuncio;
	}

	public function setCategoria($value){
		if($this->validateId($value)){
			$this->id_categoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCategoria(){
		return $this->id_categoria;
	}

	public function setPlan($value){
		if($this->validateId($value)){
			$this->id_plan = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPlan(){
		return $this->id_plan;
	}

	public function setMunicipio($value){
		if($this->validateAlphanumeric($value, 1, 60)){
			$this->municipio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getMunicipio(){
		return $this->municipio;
	}

	public function setDepartamento($value){
		if($this->validateAlphanumeric($value, 1, 60)){
			$this->departamento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDepartamento(){
		return $this->departamento;
	}

	public function setTelFijo($value){
		if($this->validateNumeric($value, 1, 8)){
			$this->tel_fijo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelFijo(){
		return $this->tel_fijo;
	}

	public function setCelular($value){
		if($this->validateNumeric($value, 1, 8)){
			$this->celular = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCelular(){
		return $this->celular;
	}

	public function setWhatsapp($value){
		if($this->validateNumeric($value, 1, 8)){
			$this->whatsapp = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getWhatsapp(){
		return $this->whatsapp;
	}

	public function setEmail($value){
		if($this->validateAlphanumeric($value, 1, 100)){
			$this->email_anuncio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEmail(){
		return $this->email_anuncio;
	}

	public function setNumeroIdentidad($value){
		if($this->validateAlphanumeric($value, 1, 10)){
			$this->numero_identidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNumeroIdentidad(){
		return $this->numero_identidad;
	}

	public function setFacebook($value){
		if($this->validateAlphanumeric($value, 1, 300)){
			$this->facebook = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFacebook(){
		return $this->facebook;
	}


	public function setInstagram($value){
		if($this->validateAlphanumeric($value, 1, 300)){
			$this->instagram = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getInstagram(){
		return $this->instagram;
	}

	public function setPaginaWeb($value){
		if($this->validateAlphanumeric($value, 1, 300)){
			$this->pagina_web = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPaginaWeb(){
		return $this->pagina_web;
	}

	//Metodos para el manejo del CRUD
	public function getCategoriaProductos(){
		$sql = "SELECT nombre_anuncio, id_anuncio, imagen_producto FROM anuncio WHERE id_categoria = ? AND estado_anuncio = 1 ";
		$params = array($this->id_categoria);
		return Database::getRows($sql, $params);
	}
	public function getProductos(){
		$sql = "SELECT a.id_anuncio, a.nombre_anuncio, a.imagen_producto, c.nombre_categoria FROM anuncio a INNER JOIN categorias c ON a.id_categoria = c.id_categoria WHERE id_usuario = ?";
		$params= array($_SESSION['id_usuario']);
		return Database::getRows($sql, $params);
	}
	public function getCategorias(){
		$sql = "SELECT id_categoria, nombre_categoria FROM categorias";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getPlanes()
	{
		$sql = "SELECT id_plan, nombre_plan FROM planes";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createProducto(){
		$sql = "INSERT INTO anuncio(nombre_anuncio, direccion, imagen_producto, estado_anuncio, id_categoria, id_usuario, municipio, departamento, tel_fijo, celular, whatsapp, email_anuncio, numero_identidad, facebook, instagram, pagina_web, id_plan) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre_anuncio, $this->direccion, $this->imagen_producto, $this->estado_anuncio, $this->id_categoria, $this->id_usuario, $this->municipio, $this->departamento, $this->tel_fijo, $this->celular, $this->whatsapp, $this->email_anuncio, $this->numero_identidad, $this->facebook, $this->instagram, $this->pagina_web, $this->id_plan);
		print_r($params);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre_anuncio,  id_categoria, estado_anuncio FROM anuncio WHERE id_anuncio = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['nombre_anuncio'];
			$this->descripcion = $producto['direccion_anuncio'];
			$this->imagen = $producto['imagen_producto'];
			$this->categoria = $producto['id_categoria'];
			$this->estado = $producto['estado_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE productos SET nombre_producto = ?, descripcion_producto = ?, precio_producto = ?, imagen_producto = ?, estado_producto = ?, id_categoria = ? WHERE id_producto = ?";
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->categoria, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM productos WHERE id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>