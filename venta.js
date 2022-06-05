function vender() {
  // Se llaman a los valores puestos en los inputs del formulario creado para el calculo del precio a vender
  var a = document.formulario_ventas.p_comp.value;
  var b = document.formulario_ventas.util.value;
  var c = document.formulario_ventas.iva.value;
  var d = document.formulario_ventas.salida.value;
  var e = document.formulario_ventas.ganancia.value;
  //se calcula el valor decimal del porcentaje puesto en la utilidad esperada e iva
  xx = parseFloat(b) / 100;
  yy = parseFloat(c) / 100;
  // se calcula el valor numero del iva del producto asi como del valor de la utilidad esperada
  x = parseFloat(a) * parseFloat(xx);
  y = parseFloat(a) * parseFloat(yy);
  // se calcula el precio que se debe pedir por el producto, sumando al valor de compra del mismo, los valores de utilidad esperada e iva
  d = parseFloat(a) + parseFloat(x) + parseFloat(y);
  // se le asigna el valor asignado anteriormente al input venta (valor de venta)
  document.formulario_ventas.venta.value = d;
  // se calcula la ganancia generada por el articulo restandole al valor de venta, el valor de compra y el impuesto de IVA
  e = parseFloat(d) - parseFloat(a) - parseFloat(y);
  // se le asigna el valor de ganancia calculado al input ganancia.
  document.formulario_ventas.ganancia.value = e;
}
