<link rel="stylesheet" href="interface/css/views/login.css">

<div class="containerLoginRegister">
    <div class="contentFormLoginRegister">
        <div class="boxBeforeForms">
            <div id="box_before__login" class="boxBefore ">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar a la pagina</p>
                <button type="button">
                    Inicia Sesión
                </button>
            </div>
            <div id="box_before__register" class="boxBefore active">
                <h3>¿Aun no tienes cuenta?</h3>
                <p>Registrate para que puedas disfrutar de más funsionalidades</p>
                <button type="button">
                    Registrarse
                </button>
            </div>
        </div>
        <div class="contentFormulariosLoginRegister">
            <form id="form-security__login" action="" class="containerForm card_shadow_float active">
                <h3>Iniciar Sesión</h3>
                <div class="seccionForm active">
                    <div class="inputField">
                        <input name="user" type="text" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputField">
                        <input name="pass" type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Iniciar Seción</button>
                </div>
            </form>
            <form id="form-security__register" action="" class="containerForm card_shadow_float">
                <h3>Registrarse</h3>
                <div class="seccionForm active">
                    <div class="inputField">
                        <input name="name" type="text" required>
                        <label for="">Nombre</label>
                    </div>
                    <div class="inputField">
                        <input name="lastname" type="text" required>
                        <label for="">Apellido</label>
                    </div>
                    <div class="inputField">
                        <input name="email" type="email" required>
                        <label for="">Correo</label>
                    </div>
                    <div class="inputField">
                        <input name="user" type="text" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputField">
                        <input name="dni" type="text" required>
                        <label for="">Cedula</label>
                    </div>
                    <div class="inputField">
                        <input name="pass" type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="inputField">
                        <input name="confirmPass" type="password" required>
                        <label for="">Confirm. Contraseña</label>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </div>


</div>
<script type="module" src="/kat/interface/js/index.js"></script>