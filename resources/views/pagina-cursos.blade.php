<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Curso de Administração</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="#">CursosTech</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-sobre')}}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato')}}">Contato</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="index.html">CursosTech</a>
</div>
</nav>

<div class="bg-warning text-dark text-center p-5">
<h1>Administração</h1>
<p>Aprenda gestão e organização empresarial.</p>
</div>

<div class="container mt-5">

<div class="row">

<div class="col-md-6">
<img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="img-fluid rounded">
</div>

<div class="col-md-6">

<h3>Sobre o curso</h3>

<p>
O curso de Administração prepara alunos para trabalhar
com gestão empresarial, organização e planejamento.
</p>

<h4>Conteúdos do curso</h4>

<ul>
<li>Gestão de empresas</li>
<li>Planejamento estratégico</li>
<li>Finanças básicas</li>
<li>Liderança e organização</li>
</ul>

<a href="contato.html" class="btn btn-warning">Quero me inscrever</a>

</div>

</div>

</div>

</body>
</html>