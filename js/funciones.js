var url = "../php/controller/controlador_sentencias.php";

function mostrarAll(){
     $.ajax({
         url: url
         
     }).done(function(response){

     }).fail(function(response){

     }); 

}

function mostrar_codigo(codigo) {
    $.ajax({
        url: url
        
    }).done(function(response){

    }).fail(function(response){

    }); 

}

function insertar() {
    $.ajax({
        url: url,
        data: retornar_data ("INSERTAR"),
        type: 'POST',
        datatype: 'json'
        
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Insertados con exito");
        }else{
            alert("response");
        }

    }).fail(function(response){
        console.log(response);

    });

}

function guardarFT() {
    $.ajax({
        url: url,
        data: retornar_data ("GUARDAR-FT"),
        type: 'POST',
        datatype: 'json'
        
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Guardados con exito");
        }else{
            alert("response");
        }

    }).fail(function(response){
        console.log(response);

    });

}

function modificar() {
    $.ajax({
        url: url,
        data: retornar_data ("MODIFICAR"),
        type: 'POST',
        datatype: 'json'
        
    }).done(function(response){
        if(response == "OK"){
            alert("Datos modificados con exito");
        }else{
            alert("response");
        }

    }).fail(function(response){
        console.log(response);

    });

}

function eliminar(id_producto) {
    $.ajax({
        url: url,
        data:{"id_producto": id_producto, "accion": "ELIMINAR"},
        type: 'POST',
        datatype: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Eliminados con exito");
        }else{
            alert("response");
        }

    }).fail(function(response){
        console.log(response);

    });

}

function validar() {
    
    cedula=document.getElementById('cedula').value;
    nombres = document.getElementById('nombres').value;
    telefono = document.getElementById('telefono').value;
    email = document.getElementById('email').value;
    codigo = document.getElementById('codigo').value;
    detalles = document.getElementById('detalles').value;
    marca = document.getElementById('marca').value;
    cantidad = document.getElementById('cantidad').value;
    fecha = document.getElementById('fecha_ingreso').value;
    garantia = document.getElementById('garantia').value;
    tecnico = document.getElementById('tecnico').value;
    observacion = document.getElementById('observacion').value;
    precio = document.getElementById('precio').value;
    estado = document.getElementById('estado').value;
    categoria = document.getElementById('categoria').value;
    

    if (cedula == "" ||
        nombres == "" ||
        telefono == "" ||
        email == "" ||
        codigo == "" ||
        detalles == "" ||
        marca == "" ||
        cantidad == "" ||
        fecha == "" ||
        garantia == "" ||
        tecnico == "" ||
        observacion == "" ||
        precio == "" ||
        estado == "" ||
        categoria == "") {

            return false;
        
    } return true;

    
}

function retornar_data(accion){
    return{
        "cedula":document.getElementById('cedula').value,
        "nombres" : document.getElementById('nombres').value,
        "telefono" : document.getElementById('telefono').value,
        "email" : document.getElementById('email').value,
        "codigo" : document.getElementById('codigo').value,
        "detalles" : document.getElementById('detalles').value,
        "marca" : document.getElementById('marca').value,
        "cantidad" : document.getElementById('cantidad').value,
        "fecha" : document.getElementById('fecha_ingreso').value,
        "garantia" : document.getElementById('garantia').value,
        "tecnico" : document.getElementById('tecnico').value,
        "observacion" : document.getElementById('observacion').value,
        "precio" : document.getElementById('precio').value,
        "estado" : document.getElementById('estado').value,
        "categoria" : document.getElementById('categoria').value,
        "accion" : accion,
        "id_producto" : document.getElementById('id_producto').value,

    };
}
