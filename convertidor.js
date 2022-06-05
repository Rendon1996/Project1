//se crean variables para que van a recibir los valores alojaddos en convertidor.(nombre de la variable), posteriormente se convierten a float mediante parseFloat se ejecuta la operacion se aloja en variable r y se pasa ese valor al imput resultado.
function convertir() {
  var i = document.convertidor.ingreso.value;
  var mi = document.convertidor.medidainicio.value;
  var mf = document.convertidor.medidafinal.value;
  var r = document.convertidor.resultado.value;
  r = (parseFloat(i) * parseFloat(mf)) / parseFloat(mi);
  document.convertidor.resultado.value = r;
}
