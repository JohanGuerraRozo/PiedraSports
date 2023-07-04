const nombreInput = document.getElementById('nom_cliente');
nombreInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20); // Limita la longitud máxima a 20 caracteres
    if (this.value.length < 4) {
        this.setCustomValidity('El nombre debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

const apellidoInput = document.getElementById('apell_cliente');
apellidoInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20); // Limita la longitud máxima a 20 caracteres
    if (this.value.length < 4) {
        this.setCustomValidity('El apellido debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

const direccionInput = document.getElementById('drr_cliente');
direccionInput.addEventListener('input', function () {
    this.value = this.value.replace(/['"]/g, '');
});