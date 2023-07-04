var iddisInput = document.getElementById('pedidoFK_distribucion');
iddisInput.addEventListener('input', function() {
  var id_pedido = parseFloat(this.value);
  if (id_pedido <= 0 || isNaN(id_pedido)) {
    this.setCustomValidity('El id debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});

//FALTA VALIDAR QUE LA FECHA FINAL NO PUEDE SER UNA FECHA ANTERIOR DE LA FECHA INICIAL