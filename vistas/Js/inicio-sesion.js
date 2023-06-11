const campoUsuario = document.querySelector("[name=usuario]");
const campoContraseña = document.querySelector("[name=contraseña]");
const enviar = document.getElementById("enviar")

const validacionCampoVacio = (mensaje, e) => { 
    const campo = e.target;
    const valorCampo = e.target.value;
    if (valorCampo.trim().length === 0) {
        campo.nextElementSibling.classList.add("error")
        campo.nextElementSibling.innerText = mensaje;
    } else { 
        campo.nextElementSibling.classList.remove("error")
        campo.nextElementSibling.innerText = "";
    }
}

campoUsuario.addEventListener("blur", (e) => validacionCampoVacio("Se necesita el nombre", e));
campoContraseña.addEventListener("blur", (e) => validacionCampoVacio("Por favor escriba su contraseña", e));
