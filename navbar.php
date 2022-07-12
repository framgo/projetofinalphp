<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AnimesHouse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Animes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulario-cadastro-animes.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="listagem-de-animes.php">Listagem</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><?= $_SESSION['login']->email ?></a>
        </li>
      </ul>
      <form id="formSearchName" class="d-flex" role="search" method="POST" action="localiza-animes.php">
        <input id="searchName" class="form-control me-2" name="nomeAnimes" type="search" placeholder="Informe o anime" aria-label="Search">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </form>
    </div>
  </div>
</nav>