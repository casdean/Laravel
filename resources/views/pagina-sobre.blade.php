<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre a Plataforma</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">CursosTech</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-sobre') }} ">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato') }} ">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- CABEÇALHO -->
<div class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Sobre Nossa Plataforma</h1>
    <p>Conheça mais sobre nossa missão, visão e compromisso com a educação.</p>
  </div>
</div>


<!-- SOBRE -->
<div class="container mt-5">

<div class="row align-items-center">

<div class="col-md-6">
<img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded">
</div>

<div class="col-md-6">
<h2>Quem Somos</h2>

<p>
A <strong>CursosTech</strong> é uma plataforma de ensino criada para oferecer
cursos profissionalizantes de qualidade para estudantes que desejam se
preparar para o mercado de trabalho.
</p>

<p>
Nosso objetivo é tornar a educação mais acessível, oferecendo conteúdos
modernos nas áreas de tecnologia, saúde, meio ambiente e gestão.
</p>

<p>
Os cursos são desenvolvidos para ensinar tanto a teoria quanto a prática,
preparando os alunos para desafios reais do mercado profissional.
</p>

</div>

</div>

</div>


<!-- MISSÃO VISÃO VALORES -->
<div class="container mt-5">

<div class="row text-center g-4">

<div class="col-md-4">
<div class="card h-100">
<div class="card-body">
<h4>Missão</h4>
<p>
Oferecer educação acessível e de qualidade, preparando profissionais
capacitados para diversas áreas do mercado de trabalho.
</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card h-100">
<div class="card-body">
<h4>Visão</h4>
<p>
Ser uma referência em ensino profissionalizante online, ajudando
milhares de estudantes a conquistarem suas carreiras.
</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card h-100">
<div class="card-body">
<h4>Valores</h4>
<p>
Compromisso com a educação, inovação no ensino, respeito aos alunos
e incentivo ao desenvolvimento profissional.
</p>
</div>
</div>
</div>

</div>

</div>


<!-- IMAGEM EXTRA -->
<div class="container mt-5">

<div class="row align-items-center">

<div class="col-md-6">
<h2>Nossa Educação</h2>

<p>
Acreditamos que a educação transforma vidas. Por isso, nossa plataforma
oferece cursos atualizados, professores qualificados e conteúdos que
preparam os alunos para o futuro.
</p>

<p>
Entre nossos cursos estão áreas como Desenvolvimento de Sistemas,
Meio Ambiente, Farmácia e Administração.
</p>

</div>

<div class="col-md-6">
<img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b" class="img-fluid rounded">
</div>

</div>

</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4 mt-5">
<p>© 2026 CursosTech - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>