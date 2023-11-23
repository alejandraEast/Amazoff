//Comprueba que esta completo correctamente formulario

function formularioBien(Contacto) {


    for (i = 0; i < Contacto.elements.length; i++) {
        if (Contacto.elements[i].type == "text" == null) {

            window.alert("Tiene que rellenar todos los campos");
        }
        else {
             window.alert("Formulario Enviado Bien")
            }
        }
    }
