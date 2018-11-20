<?php
require_once("../../app/models/categoria.class.php");
try{
    $categoria = new Categoria;
    if(isset($_POST['crear'])){
        $_POST = $categoria->validateForm($_POST);
        if($categoria->setNombre($_POST['nombre'])){
            if($categoria->setDescripcion($_POST['descripcion'])){
                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                    if($categoria->setImagen($_FILES['archivo'])){
                        if($categoria->createCategoria()){
                            Page::showMessage(1, "Categoría creada", "index.php");
                        }else{
                            if($categoria->unsetImagen()){
                                throw new Exception(Database::getException());
                            }else{
                                throw new Exception("Elimine la imagen manualmente");
                            }
                        }
                    }else{
                        throw new Exception($categoria->getImageError());
                    }
                }else{
                    throw new Exception("Seleccione una imagen");
                }
            }else{
                throw new Exception("Descripción incorrecta");
            }            
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/categoria/create_view.php");
?>