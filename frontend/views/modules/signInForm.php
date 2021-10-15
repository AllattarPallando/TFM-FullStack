<div id="signInForm">
  <form id="signIn" action="../bd/signInAction.php" method="POST">
    <div class="signInIcon">
        <i class="fas fa-user"></i>
    </div> 
    <div class="userNameInput">
        <h3 class="userNameLabel">Nombre y apellidos: <span class="asterisk">*</span></h3>
        <i class="fas fa-user"></i>
        <input type="text" name="userName" placeholder="Introduzca su nombre"/>
    </div>   
    <div class="userEmailInput">
        <h3 class="userEmailLabel">Email: <span class="asterisk">*</span></h3>
        <i class="fas fa-at"></i>
        <input type="email" name="userEmail" placeholder="Introduzca su email"/>
    </div>
    <div class="userEmailInput">
        <h3 class="userEmailRepeatLabel">Repetir email: <span class="asterisk">*</span></h3>
        <i class="fas fa-at"></i>
        <input type="email" name="userEmailR" placeholder="Repita su email"/>
    </div>
    <div class="passwordInput">
        <h3 class="passwordLabel">Clave: <span class="asterisk">*</span></h3>
        <i class="fa fa-key"></i>
        <input type="password" name="userPassword" placeholder="Introduzca su clave" />
    </div>
    <div class="passwordInput">
        <h3 class="passwordRepeatLabel">Repetir clave: <span class="asterisk">*</span></h3>
        <i class="fa fa-key"></i>
        <input type="password" name="userPasswordR" placeholder="Repita su clave" />
    </div>   
    <div class="dataProtectionCheckbox">
        <input type="checkbox" id="dataProtection" name="dataProtectionCheckbox" value="DataProtection">
        <label for="dataProtection">He leido y acepto la <a href="#">Política de privacidad</a> de Welcome to the North <span class="asterisk">*</span></label>
    </div>

    <button type="submit" form="signIn" value="signIn">Registrarse</button>
  </form>
</div>

<div id="logo">
    <a href="../index.php"><img src="img/Logo-Azul.png" alt="Logo del sitio"></a>
</div>