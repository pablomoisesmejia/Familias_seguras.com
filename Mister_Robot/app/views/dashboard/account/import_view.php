<?php 
$message = '';
if(isset($_POST["import"]))
{
 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql'){
   $connect = mysqli_connect("localhost", "root", "", "sabelofacil");
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row){
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != ''){
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($connect, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0){

    Page::showMessage(2, "Ocurrio un error al importar la base de datos", null);
    
   }
   else{
    Page::showMessage(1, "Base de Datos importada correctamente", null);
   }
  }
  else{
   Page::showMessage(2, "Archivo Invalido es necesario la extension .sql", null);
  }
 }
 else{
  Page::showMessage(2, "Por favor seleccione un archivo", null);
 }
}
?>



<div class="row">
        <div class="col s12 m6 l4 offset-l4">
          <div class="card  teal accent-4">
            <div class="card-content white-text">
            
            <form method="post" enctype="multipart/form-data">
                <h5 class="white-text">Seleccione el archivo .sql</h5>


                <div class="file-field input-field">
                <div class="btn white black-text">
                    <span>Archivo .sql*</span>
                    <input type="file" name="database">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
                </div>
                
                
                
            
            </div>
            <div class="card-action">
                <input type="submit" name="import" class="btn white black-text" value="Importar" />
            </div>
            
          </div>
        </div>
      </div>


