<div id="loginForm">
  <form id="login" action="../bd/forgotPasswordAction.php" method="POST">
    <div class="loginIcon">
        <i class="fas fa-user"></i>
    </div>
    <div class="userInput" id="newPassword">
        <h3 class="userLabel">Usuario:</h3>
        <i class="fas fa-at"></i>
        <input type="email" name="email" placeholder="Introduzca su email"/>
    </div>    
    <div class="passwordInput newPassword">
        <h3 class="passwordLabel">Clave:</h3>
        <i class="fa fa-key"></i>
        <input type="password" name="newPassword" placeholder="Introduzca su nueva clave"/>
    </div>
    <div class="passwordInput newPassword">
        <h3 class="passwordLabel">Repetir clave:</h3>
        <i class="fa fa-key"></i>
        <input type="password" name="newPasswordR" placeholder="Repita su nueva clave" />
    </div>   
    <button type="submit" form="login" value="login" class="passwordButton">Cambiar clave</button>
  </form>
</div>

<div id="logo">
    <a href="../index.php"><img src="../views/img/Logo-Morado.png" alt="Logo del sitio"></a>
</div>