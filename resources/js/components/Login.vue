<template>

<div class="container">
    <div class=" row align-items-center justify-content-center">
    <form class="form-signin">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="inputEmail" class="sr-only">Email </label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email " required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

    <router-link class="nav-link" to="/user">>>>CADASTRE-SE AQUI ! <<<</router-link>
    </form>
    </div>
</div>
</template>

<script>
    export default {};
</script>
