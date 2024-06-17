<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../IMG/icono.ico" />
  <title>PRODUCTOS PUPUCHIMA</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style_carta.css">
</head>
<style>
  .titulo {
    font-size: 27.8px;
  }
</style>
<nav class="navbar">
  <ul>
    <a href="../PHP/Inicio.php">INICIO</a>
    <a href="Sedes.php">SEDES</a>
    <a href="../PHP/Contactos.php">CONTACTO</a>
  </ul>
</nav>
<div class="titulo">
  <h1>
    <center>RESTOBAR PUPUCHIMA</center>
  </h1>
</div>

<body>
  <h1>
    <center>COCTELES Y MÁS</center>
  </h1>
  <div class="gallery">
    <?php
    include("../ConexionSQL/conexion.php");
    $query = "SELECT * FROM Cocteles WHERE Estado = 1";
    $resultado = $conn->query($query);
    while ($row = $resultado->fetch_assoc()) {
    ?>
      <div class="card">
        <img height="auto" src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>">
        <h3> <?php echo $row['Nombre']; ?></h3>
        <p> <?php echo $row['Descripcion']; ?> </p>
        <p> <?php echo $row['Precio']; ?> </p>
      </div>
    <?php
    }
    ?>
  </div>
  <h1>
    <center>NUESTROS PIQUEOS</center>
  </h1>
  <div class="gallery">
    <?php
    include("../ConexionSQL/conexion.php");
    $query = "SELECT * FROM Piqueos WHERE Estado = 1";
    $resultado = $conn->query($query);
    while ($row = $resultado->fetch_assoc()) {
    ?>
      <div class="card">
        <img height="auto" src="data:Imagen/jpg;base64, <?php echo base64_encode($row['Imagen']) ?>">
        <h3> <?php echo $row['Nombre']; ?></h3>
        <p> <?php echo $row['Descripcion']; ?> </p>
        <p> <?php echo $row['Precio']; ?> </p>
      </div>
    <?php
    }
    ?>
  </div>
</body>
<footer class="footer">
  <div class="wrap-footer">
    <div class="text-element-footer element-footer">
      <h3 class="main-c">Restaurant Pucushima</h3>
      <p>El Restobar Pucuchima es un restaurante acogedor y elegante que ofrece una experiencia gastronómica única.
        Nuestro menú cuenta con una variedad de platos elaborados con ingredientes frescos y de origen local. Nuestro
        objetivo es ofrecer a nuestros clientes un servicio excepcional y una experiencia culinaria inolvidable. </p>
    </div>
    <div class="text-element-footer element-footer">
      <h5>Dirección</h5>
      <ul>
        <li>Distrito de Ica</li>
        <li>Urbanización Camino Real 265</li>
        <li>Email: infopucuchima@gmail.com</li>
        <li>Télefono: 265-555-2021</li>
      </ul>
    </div>
    <div class="text-element-footer element-footer">
      <h5>HORARIO DE APERTURA</h5>
      <ul>
        <li>Lunes a Viernes: 13:00pm - 1:00am
          Sabado a Domingo: 13:00pm - 4:00am</li>
      </ul>
    </div>
    <div class="rs-element-footer element-footer">
      <h5>Más Información</h5>
      <ul>
        <li>
          <a href="https://facebook.com" target="_blank" rel="nofollow noopener noreferer"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales"></a>
        </li>
        <li>
          <a href="mailto:info@dropcoding.com"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIC0zMSA1MTIgNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMTEgMjcwLTQwLjkxNzk2OSA0My42NzU3ODEgMTAuOTE3OTY5IDc2LjMyNDIxOSAxMjAtOTB6bTAgMCIgZmlsbD0iIzAwYzBmMSIvPjxwYXRoIGQ9Im0wIDE4MCAxMjEgNjAgOTAgMzAgMjEwIDE4MCA5MS00NTB6bTAgMCIgZmlsbD0iIzc2ZTJmOCIvPjxwYXRoIGQ9Im0xMjEgMjQwIDYwIDE1MCAzMC0xMjAgMjEwLTE4MHptMCAwIiBmaWxsPSIjMjVkOWY4Ii8+PC9zdmc+" alt="icono redes sociales"></a>
        </li>
        <li>
          <a href="https://wa.me/600112233"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales"></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-creds">
    <div class="copy-creds">
      <p>@2023 ° Todos los derechos reservados.</p>
    </div>
    <div class="legal-creds">
      <ul>
        <li><a href="#">Politica de privacidad</a></li>
        <li><a href="#">Politica de Cookies</a></li>
        <li><a href="#">Aviso Legal</a></li>
      </ul>
    </div>
  </div>
</footer>

</html>

</html>