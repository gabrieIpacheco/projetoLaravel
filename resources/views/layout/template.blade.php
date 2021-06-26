<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de gerenciamento de consultas médicas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
          min-height: 75rem;
          padding-top: 4.5rem;
      }

      a:hover{
        cursor = pointer;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Inicio</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link active" href="{{route('consulta_listagem')}}">Consulta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('especializacao_listagem')}}">Especilizações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('paciente_listagem')}}">Pacientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('avaliacao_listagem')}}">Avaliação</a>
        </li>
        @endauth               
      </ul>
      @auth
      <ul class="navbar-nav mb-2 mb-md-0">
        <li style="border-right: solid #fff;" class="nav-item">
          <a class="nav-link active" href="#">{{auth()->user()->name}}</a>
        </li> 
      <li class="nav-item">
        <a class="nav-link active" onclick="event.preventDefault();document.getElementById('logout-form').submit()" hover="cursor:pointer">Sair</a>
        <form action="{{'logout'}}" id="logout-form" method="post" style="display: none;">{{ csrf_field()}}</form>
      </li> 
    </ul>
      @else
      <ul class="navbar-nav mb-2 mb-md-0">
        <li style="border-right: solid #fff;" class="nav-item">
          <a class="nav-link active" href="{{route('login')}}">Logar</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active" href="{{route('register')}}">Registrar</a>
        </li>
        </ul>
        @endauth
  </div>
      
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    @if (session('mensagem'))
    <div class="alert alert-success" role="alert">
        {{ session('mensagem')}}
    </div>
    @endif
    @yield('conteudo')

   </div>
</main>
    <script src="https://kit.fontawesome.com/c94479bda3.js" crossorigin="anonymous"></script>
    <<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      
  </body>
</html>