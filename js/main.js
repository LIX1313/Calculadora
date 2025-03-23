let nav = document.querySelector("nav");
document.querySelector(".boton").addEventListener("click", function () {
  nav.classList.toggle("active");
});

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});

//GRÁFICOS 2D, PARA CAMBIAR TAMAÑO FIGURA Y COLOR


function cambiarVistaGrafica() {
  ggbApplet.setCoordSystem(-20, 20, -10, 10); // Cambia a vista gráfica estándar
}

//Mostrar el valor de un range
function ActualizarValor() {
  var valuecolor = document.getElementById("ValueColor").value;
  // Convertir a decimal
  let valor = valuecolor.slice(1, 3); // "Hola"
  let decimalValuer = parseInt(valor, 16);
  // Convertir a decimal
  let valog = valuecolor.slice(3, 5); // "Hola"
  let decimalValueg = parseInt(valog, 16);
  // Convertir a decimal
  let valob = valuecolor.slice(5, 7); // "Hola"
  let decimalValueb = parseInt(valob, 16);
  document.getElementById("MostrarValuer").textContent = decimalValuer;
  document.getElementById("MostrarValueg").textContent = decimalValueg;
  document.getElementById("MostrarValueb").textContent = decimalValueb;
  
  ggbApplet.setColor('t1', decimalValuer,decimalValueg,decimalValueb); // Cambia el color a rojo (RGB)
}

//PARA PASAR DATOS DESDE LA PÁGINA PRINCIPAL
function enviardatospagina (direccion, campo1,id_valor1,campo2,id_valor2){
  let valor = document.getElementById(id_valor1).value;
  let valor2 = document.getElementById(id_valor2).value;  
  window.location.href = ''+direccion+'?'+campo1 +'='+ valor+'&'+campo2+ '=' +valor2+'';
}





