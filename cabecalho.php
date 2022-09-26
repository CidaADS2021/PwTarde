<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css"/>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">

     <img src="./logogato.jpg" alt="bootstrap" whidth="100" height="75"/>
     </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./usuarios.php">Usuários</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Usuário</a></li>
            <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cadastrar Produtos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./produtos.php">Produtos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./clientes.php">Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./disciplinas.php">Disciplinas</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
<div class="container">