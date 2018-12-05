<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/helpers/utility.class.php");
try
{
    $producto = new Producto;
    if(isset($_POST['crear']))
    {
        $_POST = $producto->validateForm($_POST);
        $producto->setId_usuario($_SESSION['id_usuario']);
        $producto->setEstadoAnuncio(0);
        if($producto->setNombre($_POST['nombre']))
        {
            if($producto->setDireccion($_POST['descripcion']))
            {
                if($producto->setMunicipio($_POST['municipio']))
                {
                    if($producto->setDepartamento($_POST['departamento']))
                    {
                        if($_POST['tel_fijo'] != null || $_POST['celular'] != null || $_POST['wha'] != null)
                        {
                            $producto->setTelFijo($_POST['tel_fijo']);
                            $producto->setCelular($_POST['celular']);
                            $producto->setWhatsapp($_POST['wha']);

                            if($producto->setEmail($_POST['correo']))
                            {
                                if($producto->setNumeroIdentidad($_POST['identificacion']))
                                {
                                    if($_POST['facebook'] != null || $_POST['insta'] != null || $_POST['pagina_web'] != null)
                                    {
                                        $producto->setFacebook($_POST['facebook']);
                                        $producto->setInstagram($_POST['insta']);
                                        $producto->setPaginaWeb($_POST['pagina_web']);
                                        if($producto->setCategoria($_POST['categoria']))
                                        {
                                            if($producto->setPlan($_POST['plan']))
                                            {
                                                if($producto->setEspecialidad($_POST['especialidad']))
                                                {
                                                    if($producto->setExperiencia($_POST['experiencia']))
                                                    {
                                                        if(is_uploaded_file($_FILES['archivo']['tmp_name']))
                                                        {
                                                            if($producto->setImagen($_FILES['archivo']))
                                                            {
                                                                if($producto->createProducto())
                                                                {
                                                                    if(Utility::saveFile($_FILES['archivo'], $producto->getRuta(), $producto->getImagen()))
                                                                    {
                                                                        Page::showMessage(1, "En estos momentos su anuncio esta desactivado, espere al administrador para que lo active", "index.php");
                                                                        require_once('../../app/helpers/correo_crear_anuncio.php');
                                                                    }
                                                                    else
                                                                    {
                                                                        Page::showMessage(3, "Producto creado pero no se guardó el archivo", "index.php");
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    echo Database::getException();
                                                                    throw new Exception(Database::getException());
                                                                }
                                                            }
                                                            else
                                                            {
                                                                throw new Exception($producto->getImageError());
                                                            }
                                                        }
                                                        else
                                                        {
                                                            throw new Exception("Seleccione una imagen");
                                                        }
                                                    }
                                                    else
                                                    {
                                                        throw new Exception("Ingrese su experiencia");
                                                    }
                                                }
                                                else
                                                {
                                                    throw new Exception("Ingrese sus especialidades");
                                                }
                                            }
                                            else
                                            {
                                                throw new Exception("Seleccione un plan");
                                            }
                                        }
                                        else
                                        {
                                            throw new Exception("Seleccione una categoría");
                                        }
                                    }
                                    else
                                    {
                                        throw new Exception("Ingrese al menos una red social o pagina web");
                                    }
                                }
                                else
                                {
                                    throw new Exception("Ingrese su número de identificacion");
                                }
                            }
                            else
                            {
                                throw new Exception("Ingrese su correo electrónico");
                            }
                        }
                        else
                        {
                            throw new Exception("Ingrese al menos un número de telefono");
                        }
                    }
                    else
                    {
                        throw new Exception("Ingrese el departamento donde vive");
                    }
                }
                else
                {
                    throw new Exception("Ingrese el municipio donde vive");
                }
            }
            else
            {
                throw new Exception("Ingrese su direccion");
            }
        }
        else
        {
            throw new Exception("Ingrese su Nombre");
        }
    }
}
catch (Exception $error)
{
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/create_view.php");
?>