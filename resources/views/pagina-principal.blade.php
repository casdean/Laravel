<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Plataforma de Cursos</title>

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
          <a class="nav-link" href="{{ route('pagina-home')}} ">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=" {{ route('pagina-sobre')}} ">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato')}} ">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- HERO -->
<div class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Plataforma de Cursos Profissionalizantes</h1>
    <p>Desenvolva habilidades para o mercado de trabalho nas áreas mais procuradas.</p>
  </div>
</div>


<!-- CURSOS -->
<div class="container mt-5">

<h2 class="text-center mb-4">Nossos Cursos</h2>

<div class="row g-4">

<!-- Desenvolvimento de Sistemas -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>
<p class="card-text">
Aprenda programação, desenvolvimento web, banco de dados e criação de aplicações modernas para o mercado de tecnologia.
</p>

<a href="#" class="btn btn-primary">Saiba mais</a>
</div>

</div>
</div>


<!-- Meio Ambiente -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>
<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais para contribuir com o futuro do planeta.
</p>

<a href="#" class="btn btn-success">Saiba mais</a>
</div>

</div>
</div>


<!-- Farmácia -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://images.unsplash.com/photo-1585435557343-3b092031a831" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Farmácia</h5>
<p class="card-text">
Aprenda sobre medicamentos, manipulação, atendimento farmacêutico e conhecimentos essenciais da área da saúde.
</p>

<a href="#" class="btn btn-danger">Saiba mais</a>
</div>

</div>
</div>


<!-- Administração -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Administração</h5>
<p class="card-text">
Desenvolva habilidades em gestão, liderança, planejamento estratégico e organização empresarial.
</p>

<a href="#" class="btn btn-warning">Saiba mais</a>
</div>

</div>
</div>


</div>
</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4 mt-5">
<p>© 2026 Plataforma CursosTech - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>