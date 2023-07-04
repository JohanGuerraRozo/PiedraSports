const nombreInput = document.getElementById('nom_proveedor');
nombreInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20); // Limita la longitud máxima a 20 caracteres
    if (this.value.length < 4) {
        this.setCustomValidity('El nombre debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

var numprovInput = document.getElementById('movil_proveedor');
numprovInput.addEventListener('input', function() {
  var numero_contacto = parseFloat(this.value);
  if (numero_contacto <= 0 || isNaN(numero_contacto)) {
    this.setCustomValidity('El numero de contacto debe ser un número mayor a cero');
  } else if (this.value.length < 10 || this.value.length > 10) {
    this.setCustomValidity('El numero de contacto debe tener 10 caracteres');
  } else {
    this.setCustomValidity('');
  }
});