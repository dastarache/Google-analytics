<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Iniciar Sesión</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>  <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <input type="checkbox" onclick="togglePasswordVisibility()">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="remember_me">
              <label class="form-check-label" for="remember_me">Recordarme</label>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </form>
          <a href="controlador.php?seccion=seccion7">¿Ha olvidado su contraseña?</a> </div>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
