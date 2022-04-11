
var hoy = new Date();

var fecha = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();

var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();

var fechaYHora = fecha + ' ' + hora;

console.log(hoy)