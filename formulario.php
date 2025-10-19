<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Bootstrap</title>
  <!-- CDN de Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Registro de Usuario</h2>
  <form>
    <!-- Nombre -->
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre completo</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
    </div>

    <!-- Correo -->
    <div class="mb-3">
      <label for="correo" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
    </div>

    <!-- Contraseña -->
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
    </div>

    <!-- Selección de rol -->
    <div class="mb-3">
      <label for="rol" class="form-label">Rol</label>
      <select class="form-select" id="rol">
        <option selected>Selecciona un rol</option>
        <option value="1">Administrador</option>
        <option value="2">Usuario</option>
        <option value="3">Invitado</option>
      </select>
    </div>

    <!-- Checkbox -->
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terminos">
      <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
    </div>

    <!-- Botón de envío -->
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<!-- JS de Bootstrap (opcional para componentes dinámicos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
