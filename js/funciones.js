var url = "../php/controller/controlador_sentencias.php";

function mostrarAll(){
     $.ajax({
         url: url
         
     }).done(function(response){

     }).fail(function(response){

     }); 

}

function mostrar_codigo(codigo) {

}

function insertar() {

}

function guardarFT() {

}

function modificar() {

}

function eliminar(id_producto) {

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
