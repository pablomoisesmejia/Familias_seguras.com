

function bienvenida_al_sistema(){
    
    var hora = $("#horadedia").text();
    var user = $("#name").text();
    
    print=hora;
    
    if(hora >= 0 && hora <=6 ){
      document.getElementById('welcom_text').innerHTML='Buenos días '+user+' se nota que hoy madrugaste, no te olvides de una taza de café.';
    }
    else if(hora >= 7 && hora < 12){
      document.getElementById('welcom_text').innerHTML='Buenos días '+user+' que tengas una linda mañana laboral.';
    }
    else if(hora == 12){
      document.getElementById('welcom_text').innerHTML='Hola '+user+' vaya ya es mediodía, ten linda tarde y no te olvides de almorzar.';
    }
    else if(hora >= 13 && hora <= 15){
      document.getElementById('welcom_text').innerHTML='Buenas tardes '+user+' que tengas una linda tarde laboral.';
    }
    else if(hora >= 18 && hora <= 24 ){
      document.getElementById('welcom_text').innerHTML='Buenas noches '+user+', ¿trabajo de noche? ten una linda jornada.';
    }
  }
