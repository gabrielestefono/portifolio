@include('site.layouts._partials.header')
<form class="loginForm">
    <div class="loginForm__element">
        <label>Email</label>
        <input type="email" name="email" placeholder="joaosilva@mail.com">
    </div>
    <div class="loginForm__element">
        <label>Senha</label>
        <input type="password" name="password" placeholder="************">
    </div>
    <div class="loginForm__element">
        <button type="submit">Login</button>
    </div>
    <p>Não possui uma conta? <a href="{{ route('site.registro') }}"> Registre-se </a></p>
</form>