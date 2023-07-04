var preciototInput = document.getElementById('precioTotal_venta');
preciototInput.addEventListener('input', function() {
  var precio_tot = parseFloat(this.value);
  if (precio_tot <= 0 || isNaN(precio_tot)) {
    this.setCustomValidity('El precio debe ser un número mayor a cero');
  } else if (this.value.length < 4 || this.value.length > 20) {
    this.setCustomValidity('El precio debe tener entre 4 y 20 caracteres');
  } else {
    this.setCustomValidity('');
  }
});

var preciouniInput = document.getElementById('precioUnitario_venta');
preciouniInput.addEventListener('input', function() {
  var precio_uni = parseFloat(this.value);
  if (precio_uni <= 0 || isNaN(precio_uni)) {
    this.setCustomValidity('El precio debe ser un número mayor a cero');
  } else if (this.value.length < 4 || this.value.length > 20) {
    this.setCustomValidity('El precio debe tener entre 4 y 20 caracteres');
  } else {
    this.setCustomValidity('');
  }
});

var idCompraInput = document.getElementById('cantProducto_venta');
idCompraInput.addEventListener('input', function() {
  var id_proveedor = parseFloat(this.value);
  if (id_proveedor <= 0 || isNaN(id_proveedor)) {
    this.setCustomValidity('La cantidad debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});

const forpagoInput = document.getElementById('formaPago_venta');
forpagoInput.addEventListener('input', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    this.value = this.value.substr(0, 20);
    if (this.value.length < 4) {
        this.setCustomValidity('El nombre debe tener al menos 4 caracteres');
    } else {
        this.setCustomValidity('');
    }
});

var idpedidoInput = document.getElementById('pedidoFK_venta');
idpedidoInput.addEventListener('input', function() {
  var id_pedido = parseFloat(this.value);
  if (id_pedido <= 0 || isNaN(id_pedido)) {
    this.setCustomValidity('El id debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});

var idempleadoInput = document.getElementById('empleadoFK_venta');
idempleadoInput.addEventListener('input', function() {
  var id_empleado = parseFloat(this.value);
  if (id_empleado <= 0 || isNaN(id_empleado)) {
    this.setCustomValidity('El id debe ser un número mayor a cero');
  } 
  else {
    this.setCustomValidity('');
  }
});