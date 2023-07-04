var precioCompraInput = document.getElementById('preci_compra');
precioCompraInput.addEventListener('input', function() {
  var precio = parseFloat(this.value);
  if (precio <= 0 || isNaN(precio)) {
    this.setCustomValidity('El precio debe ser un número mayor a cero');
  } else if (this.value.length < 4 || this.value.length > 20) {
    this.setCustomValidity('El precio debe tener entre 4 y 20 caracteres');
  } else {
    this.setCustomValidity('');
  }
});

const forpagoInput = document.getElementById('forpago_compra');
forpagoInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20); // Limita la longitud máxima a 20 caracteres
    if (this.value.length < 4) {
        this.setCustomValidity('El nombre debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

var idCompraInput = document.getElementById('proveFK_compra');
idCompraInput.addEventListener('input', function() {
  var id_proveedor = parseFloat(this.value);
  if (id_proveedor <= 0 || isNaN(id_proveedor)) {
    this.setCustomValidity('El id debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});
