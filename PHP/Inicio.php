<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../IMG/icono.ico" />
  <link rel="stylesheet" href="../CSS/styles.css" />
  <title>RESTOBAR PUPUCHIMA</title>
</head>
<style>
  .header {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
      url(../IMG/LOGO.png);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 70vh;
    display: flex;
    align-items: center;
  }

  .services {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
      url(../IMG/BARMAN_css.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 100px 0;
    color: #f9fafc;
  }
</style>

<body>
  <header class="header">
    <div class="menu container">
      <a href="#" class="logo"></a>
      <input type="checkbox" id="menu" />
      <label for="menu">
        <img src="../IMG/bar.jpg" class="menu-icono" alt="" />
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="../index_principal.html">SALIR</a></li>
          <li><a href="../PHP/Carta.php">Carta</a></li>
          <li><a href="../PHP/Sedes.php">Sedes</a></li>
          <li><a href="../PHP/Contactos.php">Contáctanos</a></li>
        </ul>
      </nav>
    </div>

    <div class="header-content container">
      <h1>PUPUCHIMA</h1>
      <p>
        ¡Bienvenidos al lugar donde la gastronomía y la buena compañía se
        fusionan en una experiencia única! Les presentamos nuestro encantador
        restobar, un espacio vibrante y acogedor que te invita a disfrutar de
        momentos inolvidables mientras te deleitas con sabores excepcionales
      </p>
    </div>
  </header>

  <section class="bar">
    <img class="restobar-img" alt="" />

    <div class="bar-content container">
      <h2>NUESTRAS ESPECIALIDADES</h2>
      <p class="txt-p">
        VISUALIZA TODOS LOS COCTELES QUE PODRÁS PROBAR, NI QUE DECIR DE LOS
        EXCELENTES PIQUEOS QUE CONTAMOS PARA TI!
      </p>
      <div class="Cocteles-group">
        <div class="cocteles-1">
          <img src="../IMG/Cocteles.jpg" alt="" />
          <h3>Cocteles</h3>
          <p align="justify">
            En esta experiencia de cócteles exóticos, cada sorbo es una
            aventura en sí misma. Descubrirás nuevos y emocionantes
            ingredientes que despertarán tus sentidos y te llevarán en un
            viaje gustativo. Desde las notas afrutadas y tropicales de los
            cócteles caribeños, hasta los sabores especiados y exóticos de los
            cócteles del Medio Oriente, cada trago es una sorpresa que te
            transportará a lugares lejanos.¿QUÉ ESPERAS?
          </p>
        </div>
        <div class="cocteles-1">
          <img src="../IMG/cerveza.jpg" alt="" />
          <h3>CERVEZAS</h3>
          <p align="justify">
            Imagínate la escena: tú y tus leales amigos de cuatro patas
            reunidos en un espacio al aire libre, rodeados de buen ambiente y
            con el cálido sol acariciando sus pelajes. En el centro, una mesa
            llena de una amplia variedad de cervezas artesanales, cada una con
            su propio carácter y sabor distintivo. ¡TE ESPERAMOS CON TU
            GRUPASO!
          </p>
        </div>
        <div class="cocteles-1">
          <img src="../IMG/whisky.jpg" alt="" />
          <h3>WHISKY</h3>
          <p align="justify">
            Imagínate deleitándote con el whisky en tus manos, mientras te
            sumerges en un viaje lleno de sabor, historia y tradición. Cada
            sorbo es una invitación a explorar un universo de aromas
            cautivadores y sabores complejos que despiertan los sentidos y
            transportan tu paladar a nuevas dimensiones.
          </p>
        </div>
      </div>
      <a href="../PHP/Carta.php" class="btn-1">REVISAR CARTA</a>
    </div>
  </section>

  <main class="services">
    <div class="services-content container">
      <h2>
        <center>SERVICIOS</center>
      </h2>

      <div class="services-group">
        <div class="services-1">
          <img src="../IMG/servicio-1.jpg" alt="" />
          <h3>WIFI, para que puedas navegar mientras te diviertes!</h3>
        </div>
        <div class="services-1">
          <img src="../IMG/servicio-2.jpg" alt="" />
          <h3>Lugar acogedor para ti y tus patas!</h3>
        </div>
        <div class="services-1">
          <img src="../IMG/servicio-3.jpg" alt="" />
          <h3>
            Cocteles y piqueos de buena calidad para tus noches de diversión!
          </h3>
        </div>
      </div>
      <p align="justify">
        ¡Bienvenidos a nuestro excepcional restobar, donde la buena comida,
        los deliciosos cócteles y el ambiente acogedor se unen para crear una
        experiencia inigualable! Permítannos presentarles los servicios que
        ofrecemos en nuestro establecimiento, diseñados para satisfacer todos
        sus deseos culinarios y brindarles momentos memorables.
      </p>
      <a href="../PHP/Contactos.php" class="btn-1">Reserva ahora</a>
    </div>
  </main>

  <section class="blog container">
    <h2>HOLA!</h2>
    <p align="justify">
      <center>
        ¡Bienvenidos a nuestro restobar, donde los sabores se mezclan y los
        momentos se convierten en eternos recuerdos!
      </center>
    </p>

    <div class="blog-content">
      <div class="blog-1">
        <img src="../IMG/restobar_area.jpg" />
        <h3>NUESTRO AMBIENTE</h3>
        <p align="justify">
          Nuestro ambiente es otro de nuestros distintivos. En nuestro
          restobar, te sumergirás en un espacio cuidadosamente diseñado, donde
          la elegancia se encuentra con la calidez. Desde la iluminación tenue
          hasta la música cuidadosamente seleccionada, hemos creado un entorno
          que te invita a relajarte, disfrutar y conectar con tus compañeros
          de mesa.
        </p>
      </div>
      <div class="blog-1">
        <img src="../IMG/piqueos2.jpg" />
        <h3>NUESTROS PIQUEOS</h3>
        <p align="justify">
          Nuestros piqueos son una combinación de creatividad, frescura y
          calidad. Cada bocado ha sido cuidadosamente elaborado por nuestros
          talentosos cocineros, que se inspiran en sabores locales e
          internacionales para crear una experiencia gastronómica única.
        </p>
      </div>
      <div class="blog-1">
        <img src="../IMG/Barman1.jpeg" />
        <h3>NUESTRO BARMAN</h3>
        <p>
          Con una pasión inigualable por las bebidas y una habilidad
          extraordinaria para crear cócteles excepcionales, les presentamos a
          nuestros especialistas, el arquitecto detrás de los sabores más
          exquisitos y las experiencias más memorables.
        </p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="wrap-footer">
      <div class="text-element-footer element-footer">
        <h3 class="main-c">Restaurant Pucushima</h3>
        <p>
          El Restobar Pucuchima es un restaurante acogedor y elegante que
          ofrece una experiencia gastronómica única. Nuestro menú cuenta con
          una variedad de platos elaborados con ingredientes frescos y de
          origen local. Nuestro objetivo es ofrecer a nuestros clientes un
          servicio excepcional y una experiencia culinaria inolvidable.
        </p>
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
          <li>
            Lunes a Viernes: 13:00pm - 1:00am Sabado a Domingo: 13:00pm -
            4:00am
          </li>
        </ul>
      </div>
      <div class="rs-element-footer element-footer">
        <h5>Más Información</h5>
        <ul>
          <li>
            <a href="https://facebook.com" target="_blank" rel="nofollow noopener noreferer"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales" /></a>
          </li>
          <li>
            <a href="mailto:info@dropcoding.com"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIC0zMSA1MTIgNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMTEgMjcwLTQwLjkxNzk2OSA0My42NzU3ODEgMTAuOTE3OTY5IDc2LjMyNDIxOSAxMjAtOTB6bTAgMCIgZmlsbD0iIzAwYzBmMSIvPjxwYXRoIGQ9Im0wIDE4MCAxMjEgNjAgOTAgMzAgMjEwIDE4MCA5MS00NTB6bTAgMCIgZmlsbD0iIzc2ZTJmOCIvPjxwYXRoIGQ9Im0xMjEgMjQwIDYwIDE1MCAzMC0xMjAgMjEwLTE4MHptMCAwIiBmaWxsPSIjMjVkOWY4Ii8+PC9zdmc+" alt="icono redes sociales" /></a>
          </li>
          <li>
            <a href="https://wa.me/600112233"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales" /></a>
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
</body>

</html>