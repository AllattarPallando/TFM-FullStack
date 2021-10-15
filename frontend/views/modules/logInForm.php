<div id="loginForm">
  <form id="login" action="../bd/logInAction.php" method="POST">
    <div class="loginIcon">
        <i class="fas fa-user"></i>
    </div>    
    <div class="userInput">
        <h3 class="userLabel">Usuario:</h3>
        <i class="fas fa-at"></i>
        <input type="email" name="email" placeholder="Introduzca su email"/>
    </div>
    <div class="passwordInput">
        <h3 class="passwordLabel">Clave:</h3>
        <i class="fa fa-key"></i>
        <input type="password" name="password" placeholder="Introduzca su clave" />
    </div>
    <div class="forgotPasswordLink">
        <i class="fas fa-unlock-alt"></i>
        <a href="forgotPassword.php">¿Olvidaste tu clave?</a>
    </div>    
    <button type="submit" form="login" value="login">Iniciar perfil</button>
  </form>
</div>

<div id="logo">
    <a href="../index.php"><img src="img/Logo-Morado.png" alt="Logo del sitio"></a>
</div>