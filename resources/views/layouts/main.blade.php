<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Compartilhamento de ideias para desenvolvedores front-end, dicas e ferramentas diversas.">
    <link rel="shortcut icon" href="/images/alex.png" type="image/x-icon">
    <title>@yield('title','Alex Freitas')</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background: #D9D9D9">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a class="navbar-brand" href="/">
            <img src="/images/logoNav.png" alt="Logo do blog Márcio Freitas" style="width: 50px">
          </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://marciofreitas.netlify.app/" target="_blank">Site</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                  Painel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin">
                  Criar Post
                </a>
              </li>

              <form action="/logout" method="POST">
                @csrf
                <a href="logout" class="nav-link"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                  Sair
                </a>
              </form>
              @endauth
            </ul>
            <h1 class="fs-4"><img src="/images/alex.png" class="rounded-circle" style="width: 50px" alt="Márcio Alex Freitas"> Márcio Alex Freitas</h1>
          </div>
        </div>
      </nav>

        @yield('content')

      <footer class="bg-light text-center text-lg-start mt-3">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-dark" href="https://marciofreitas.netlify.app/">Márcio Freitas</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>