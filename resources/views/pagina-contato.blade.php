<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato</title>

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
          <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-contato') }}">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- CABEÇALHO -->
<div class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p>Envie sua dúvida, sugestão ou solicitação para nossa equipe.</p>
  </div>
</div>


<!-- CONTATO -->
<div class="container mt-5">

<div class="row g-4">

<!-- FORMULÁRIO -->
<div class="col-md-7">

<h3>Envie uma mensagem</h3>

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control" placeholder="Digite seu nome">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Digite seu email">
</div>

<div class="mb-3">
<label class="form-label">Assunto</label>
<input type="text" class="form-control" placeholder="Digite o assunto">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
</div>

<button type="submit" class="btn btn-primary">Enviar Mensagem</button>

</form>

</div>


<!-- INFORMAÇÕES -->
<div class="col-md-5">

<h3>Informações de Contato</h3>

<p><strong>Email:</strong> contato@cursostech.com</p>
<p><strong>Telefone:</strong> (15) 99999-9999</p>
<p><strong>Endereço:</strong> Rua Exemplo, 123 - Centro</p>
<p><strong>Cidade:</strong> Tatuí - SP</p>

<hr>

<h4>Horário de Atendimento</h4>

<p>Segunda a Sexta: 08:00 às 18:00</p>
<p>Sábado: 08:00 às 12:00</p>

</div>

</div>

</div>


<!-- MAPA -->
<div class="container mt-5">

<h3 class="text-center mb-3">Nossa Localização</h3>

<div class="ratio ratio-16x9">

<iframe 
src="https://www.google.com/maps?q=tatuí+sp&output=embed"
style="border:0;"
allowfullscreen=""
loading="lazy">
</iframe>

</div>

</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4 mt-5">
<p>© 2026 CursosTech - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>