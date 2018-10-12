<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Familias Seguras</title>

    
    <link rel="stylesheet" href="public/fonts/letras.css">
    <link rel="stylesheet" href="public/css/material_icons.css">
    <link rel="stylesheet" href="public/css/materialize.css">
    <link rel="stylesheet" href="public/css/public_style.css">

</head>
<body onload="myFunction();">
<div id="loader">
    <center>
    <img style="height: 100px;margin-top:100px; margin-top:38vh;" src="public/img/load/for_white.gif">
  <p>Espera un momento</p>
</center>
</div>
<!-- ABRO BACKGROUND -->
<div id="blackground_walls">
    
    <!-- CIERRO BACKGROUND -->
</div>

<!-- ABRO BLACK_BACK -->
<div id="black_back">
    
    <!-- CIERRO BLACK_BACK -->
</div>


<header>

    <div id='header_bar'>
        <div id="lateral_conection">
            
        </div>
        <a onclick="section_selected=3; show_info_section();" class="button_zero_flat">Nosotros</a>
        <div class="divider_btn"> </div>   
        <a onclick="section_selected=2; show_info_section();" class="button_zero_flat">Cotiza</a>    
        <div class="divider_btn"> </div>   
        <a onclick="section_selected=4; show_info_section();" class="button_zero_flat">Contactanos</a>  

            <!-- -->
        <div style="" id="contactanos_header">
        <div class="divider_btn"> </div>  
            <a id="tel_btn_header" href="tel:+50322607851" class="lateral_btn_style_header">
                <i class='material-icons prefix'>phone</i>   
            </a>
            
            <a href="https://www.facebook.com/familiasseguras/" class="lateral_btn_style_header">
                <img class="lateral_icons" src="public/img/icon/fb_icon.png" alt="facebook">
            </a>
             
            <a id="wha_btn_header" href="https://api.whatsapp.com/api/send?phone=50377280640&text=Me%20Gustaria%20obtener%20una%20cotizacion%20sobre%20los%20seguros%20que%20ofrecen." class="lateral_btn_style_header">
                <img class="lateral_icons" src="public/img/icon/wha_icon.png" alt="whatsapp">
            </a>
            
             <a href="https://www.instagram.com/" class="lateral_btn_style_header">
                    <img class="lateral_icons" src="public/img/icon/insta_icon.png" alt="instagram">
                </a>
        
        </div>


    </div>
    
</header>


