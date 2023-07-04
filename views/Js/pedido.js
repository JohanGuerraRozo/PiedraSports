const descInput = document.getElementById('desc_pedido');
descInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20); // Limita la longitud máxima a 20 caracteres
    if (this.value.length < 4) {
        this.setCustomValidity('La describcion debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

var idpedidoInput = document.getElementById('clienteFK_pedido');
idpedidoInput.addEventListener('input', function() {
  var id_cliente = parseFloat(this.value);
  if (id_cliente <= 0 || isNaN(id_cliente)) {
    this.setCustomValidity('El id debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});