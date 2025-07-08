<?php
// Usamos $_GET si el formulario fue enviado por GET
$usuario = isset($_GET["correo"]) ? $_GET["correo"] : 'nulo';
$clave = isset($_GET["clave"]) ? $_GET["clave"] : 'nulo';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin-top: 5%;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
      background-color: rgb(200, 200, 210);
      border-radius: 5%;
    }
  </style>
</head>
<body>
<div class="container w-25 border border-5 border-primary">
  <div class="mb-3">
    <p>El correo es: <strong><?php echo htmlspecialchars($usuario); ?></strong></p>
    <p>La clave es: <strong><?php echo htmlspecialchars($clave); ?></strong></p>
    <button class="btn btn-primary" onclick="enviar()">Haz clic aquí</button>
  </div>
</div>

<script>
// Pasamos las variables PHP a JavaScript
const correo = <?php echo json_encode($usuario); ?>;
const clave = <?php echo json_encode($clave); ?>;

function enviar() {
  const queryString = `?correo=${encodeURIComponent(correo)}&clave=${encodeURIComponent(clave)}`;
  window.location.href = `direccion_joel.php${queryString}`;
}
</script>
</body>
</html>
