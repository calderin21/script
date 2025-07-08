document.getElementById("formulario").addEventListener("submit", function(e) {
 
  e.preventDefault(); // evita que se envíe el formulario

  const correo = document.getElementById("correo").value.trim();
  const clave = document.getElementById("clave").value.trim();

  const correoRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}(\.[0-9]{1,3}){3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  const claveRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,16}$/;


if (!correoRegex.test(correo)) {
    if (!claveRegex.test(clave)) {
  alert("los datos no son válidos.");
} else {
  alert("El usuario no es válido");
}
 
} else if (!claveRegex.test(clave)) {
  alert("La clave no es válida");
} else {
  const queryString = `?correo=${encodeURIComponent(correo)}&clave=${encodeURIComponent(clave)}`;
  window.location.href = `index2.php${queryString}`;
}

});

