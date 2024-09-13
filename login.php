<?php
$errores = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!$email){
        $errores[] = "el email es obligatorio o no es válido";
    }
    if(!$password){
        $errores[] = "El password es obligatorio";
    }
    if(empty ($errores)){

    }
}


require_once 'db_fake.php';
function showLogin(){
    global $errores;
    require_once 'templates/header.php';
?>
<main class="loginForm">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error):?>
        <div class="alerta error">
          <?php echo $error;?>
        </div>
    <?php endforeach;?>    
    
<form method= "POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">No compartiremos su correo.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  
  <a href="contacto" class="mb-3 mt-3 btn btn-primary">Ir a Contacto</a>
  
</form>
</main>
<?php require_once 'templates/footer.php';
}