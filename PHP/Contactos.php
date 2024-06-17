<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../IMG/icono.ico" />
  <link rel="stylesheet" href="../CSS/style_contacto.css" />
  <title>CONTACTO</title>
</head>

<body>
  <header class="speaker-form-header">
    <h1>RESTOBAR PUPUCHIMA - CONTACTO</h1>
    <p>
      Bienvenido a nuestro contacto, por favor rellene los campos y nos
      estaremos comunicando con usted.
    </p>
  </header>
  <form action="../PHP/form_contactos.php" method="POST" class="speaker-form">
    <div class="form-row">
      <label for="name">NOMBRE</label>
      <input id="name" name="name" type="text" placeholder="Ingresa tu nombre" required />
    </div>

    <div class="form-row">
      <label for="email">EMAIL</label>
      <input id="email" name="email" type="email" placeholder="example@hotmail.com" required />
    </div>

    <fieldset class="legacy-form-row">
      <legend>CONTACTO</legend>
      <input id="talk-type-1" name="talk-type" type="radio" value="laboral" />
      <label for="talk-type-1" class="radio-label">Oferta laboral</label>
      <input id="talk-type-2" name="talk-type" type="radio" value="reservar" />
      <label for="talk-type-2" class="radio-label">Reservar</label>
      <input id="talk-type-3" name="talk-type" type="radio" value="sugerencias" />
      <label for="talk-type-3" class="radio-label">Sugerencias</label>
    </fieldset>

    <div class="form-row">
      <label for="abstract">MENSAJE</label>
      <textarea id="mensaje" name="mensaje_textarea"></textarea>
      <div class="instrucciones">
        Escribe aquí el mensaje que gustes enviarnos
      </div>
    </div>

    <div class="form-row">
      <button type="submit" name="enviar">ENVIAR</button>
    </div>
  </form>
</body>

</html>