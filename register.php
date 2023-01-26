<?php include_once("templates/header.php"); ?>

<section class="register">
    <div class="register__illustration">
        <p class="register__illustration--text">Imagem vai aqui, ver com designer sobre ela</p>
        <div class="register__illustration--image"></div>
        <p class="register__illustration--text">Subtítulo ou algo assim</p>
    </div>
    <div class="register__form">
        <div class="register__form--topbuttons">
            <div class="register__form--topbuttons_google">
                <div class="register__form--topbuttons_google-image"></div>
                <p class="register__form--topbuttons_google-name">Google</p>
            </div>
            <div class="register__form--topbuttons_facebook">
                <div class="register__form--topbuttons_facebook-image"></div>
                <p class="register__form--topbuttons_facebook-name">Facebook</p>
            </div>
        </div>
        <div class="register__form--form">
            <input type="text" class="register__form--form_input">
            <input type="text" class="register__form--form_input">
            <input type="text" class="register__form--form_input">
            <div class="register__form--form_terms">
                <div class="register__form--form_terms-checkbox">
                    <input type="checkbox" id="terms" class="register__form--form_terms-checkbox-box">
                    <label for="terms" class="register__form--form_terms-text">Aceito os <a href="" class="register__form--form_terms-link">Termos e condições</a></label>
                </div>
            </div>
            <button class="register__form--form_terms-button">Registrar</button>
            <div class="register__form--form_login">
                <p class="register__form--form_login-text">Já possui uma conta? Faça <a href="" class="register__form--form_login-link">Login</a></p>
            </div>
        </div>
    </div>
</section>