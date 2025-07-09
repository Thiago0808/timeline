<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Noto Serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300&display=swap" rel="stylesheet">
    
    <!-- EB Garamond -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Funcionário</title>
  </head>
  <body>
    <div class="container">

        <!-- Navegador -->
            <ul class="nav justify-content-end">
                <li class="logo pc">
                  <img src="img/logo.png" alt="Logo Liceria">
                </li>
                <li class="logo celular logo_gerente">
                  <img src="img/logo_celular.png" alt="Logo Liceria">
                </li>
                <li class="nav-item celular">
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                      &#9776;
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="collapse" href="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Gêneros</a>
                      <a class="dropdown-item" data-toggle="collapse" href="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Editoras</a>
                      <a class="dropdown-item" data-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Autores</a>
                      <a class="dropdown-item" data-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Livros</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item pc">
                  <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Gêneros</a>
                </li>
                <li class="nav-item pc">
                  <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Editoras</a>
                </li>
                <li class="nav-item pc">
                  <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Autores</a>
                </li>
                <li class="nav-item last-child pc">
                  <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Livros</a>
                </li>
            </ul>

        <!-- Header / Introdução -->



        <main>
          <h1 class="gerente_titulo">O que irá fazer hoje, funcionário?</h1>

          <!-- Colapsos -->
          <p class="botoes pc">
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
              <img src="img/Funcionario/autores.png" class="pc" alt="">
            </a>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
              <img src="img/Funcionario/livros.png" class="pc" alt="">
            </a>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">
              <img src="img/Funcionario/editoras.png" class="pc" alt="">
            </a>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">
              <img src="img/Funcionario/generos.png" class="pc" alt="">
            </a>
          </p>
          <div class="oito_cinco pc">
            <div class="">
              <div class="collapse " id="multiCollapseExample1">
                <div class="card card-body">
                  <div class="exemplos">
                    <div class="ex">
                      <img src="img/Funcionario/autor_Kinney.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/autor_Alencar.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/autor_Kate.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/autor_Blonte.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/autor_Jonathan.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                    </div>
                  </div>
                  <div class="extras">
                    <form action="?page=pesquisar" method="get" class="form-inline">
                      <img src="img/Funcionario/lupa preta.png" alt="">
                      <input type="search" name="pesquisar">
                      <input type="hidden" name="page" value="pesquisar">
                    </form>
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_autor">Adicionar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  <div class="exemplos">
                    <div class="ex">
                      <img src="img/Funcionario/livroEx_Banana1.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/livroEx_Banana4.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/livroEx_Futebol.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/livroEx_Morro.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/livroEx_Paixao.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                    </div>
                  </div>
                  <div class="extras">
                    <form action="?page=pesquisar" method="get" class="form-inline">
                      <img src="img/Funcionario/lupa preta.png" alt="">
                      <input type="search" name="pesquisar">
                      <input type="hidden" name="page" value="pesquisar">
                    </form>
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd">Adicionar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="collapse " id="multiCollapseExample3">
                <div class="card card-body">
                  <div class="exemplos">
                    <div class="ex">
                      <img src="img/Funcionario/editora_VR.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/editora_Principis.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/editora_Penguin.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/editora_GrandeArea.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/editora_Galera.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                    </div>
                  </div>
                  <div class="extras">
                    <form action="?page=pesquisar" method="get" class="form-inline">
                      <img src="img/Funcionario/lupa preta.png" alt="">
                      <input type="search" name="pesquisar">
                      <input type="hidden" name="page" value="pesquisar">
                    </form>
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_editora">Adicionar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="collapse " id="multiCollapseExample4">
                <div class="card card-body">
                  <div class="exemplos">
                    <div class="ex">
                      <img src="img/Funcionario/genero_Comedia.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/genero_Romance.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/genero_Esporte.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/genero_Misterio.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                    </div>
                    <div class="ex">
                      <img src="img/Funcionario/genero_Terror.png" alt="">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                    </div>
                  </div>
                  <div class="extras">
                    <form action="?page=pesquisar" method="get" class="form-inline">
                      <img src="img/Funcionario/lupa preta.png" alt="">
                      <input type="search" name="pesquisar">
                      <input type="hidden" name="page" value="pesquisar">
                    </form>
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_genero">Adicionar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Colapsos Celular -->
          <p class=" botoes ">
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
              <img src="img/Funcionario/autores_celular.png" class="celular" alt="">
            </a>
            <div class="oito_cinco celular">
              <div class="">
                <div class="collapse " id="multiCollapseExample1">
                  <div class="card card-body">
                    <div class="tabelinha">
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    </div>

                    <div class="exemplos">
                      <div class="ex">
                        <img src="img/Funcionario/autor_Kinney_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                      </div>
                      <div class="ex">
                        <img src="img/Funcionario/autor_Alencar_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_autores">Ver Mais</button>
                      </div>
                    </div>
                    <div class="extras">
                      <form action="?page=pesquisar" method="get" class="form-inline">
                        <img src="img/Funcionario/lupinha_preta.png" alt="">
                        <input type="search" name="pesquisar">
                        <input type="hidden" name="page" value="pesquisar">
                      </form>

                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_autor">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
              <img src="img/Funcionario/livros_celular.png" class="celular" alt="">
            </a>
            <div class="oito_cinco celular">
              <div class="">
                <div class="collapse " id="multiCollapseExample2">
                  <div class="card card-body">
                    <div class="tabelinha">
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    </div>

                    <div class="exemplos">
                      <div class="ex">
                        <img src="img/Funcionario/livroEx_Banana1_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                      </div>
                      <div class="ex">
                        <img src="img/Funcionario/livroEx_Morro_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_livros">Ver Mais</button>
                      </div>
                    </div>
                    <div class="extras">
                      <form action="?page=pesquisar" method="get" class="form-inline">
                        <img src="img/Funcionario/lupinha_preta.png" alt="">
                        <input type="search" name="pesquisar">
                        <input type="hidden" name="page" value="pesquisar">
                      </form>

                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">
              <img src="img/Funcionario/editoras_celular.png" class="celular" alt="">
            </a>
            <div class="oito_cinco celular">
              <div class="">
                <div class="collapse " id="multiCollapseExample3">
                  <div class="card card-body">
                    <div class="tabelinha">
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    </div>

                    <div class="exemplos">
                      <div class="ex">
                        <img src="img/Funcionario/editora_Penguin_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                      </div>
                      <div class="ex">
                        <img src="img/Funcionario/editora_GrandeArea_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_editoras">Ver Mais</button>
                      </div>
                    </div>
                    <div class="extras">
                      <form action="?page=pesquisar" method="get" class="form-inline">
                        <img src="img/Funcionario/lupinha_preta.png" alt="">
                        <input type="search" name="pesquisar">
                        <input type="hidden" name="page" value="pesquisar">
                      </form>

                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_editora">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">
              <img src="img/Funcionario/generos_celular.png" class="celular" alt="">
            </a>
            <div class="oito_cinco celular">
              <div class="">
                <div class="collapse " id="multiCollapseExample4">
                  <div class="card card-body">
                    <div class="tabelinha">
                    <table><tr>
                      <th>Anterior</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>Próximo</th>
                    </tr></table>
                    </div>

                    <div class="exemplos">
                      <div class="ex">
                        <img src="img/Funcionario/genero_Comedia_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                      </div>
                      <div class="ex">
                        <img src="img/Funcionario/genero_Romance_celular.png" alt="">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal_generos">Ver Mais</button>
                      </div>
                    </div>
                    <div class="extras">
                      <form action="?page=pesquisar" method="get" class="form-inline">
                        <img src="img/Funcionario/lupinha_preta.png" alt="">
                        <input type="search" name="pesquisar">
                        <input type="hidden" name="page" value="pesquisar">
                      </form>

                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalAdd_genero">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </p>

          <!-- Modal Livros-->
          <?php
          require_once 'include/conexao.php';
          $sql = "SELECT *, a.nome AS nome_autor, e.nome AS nome_editora FROM livro l, autor a, editora e WHERE l.cod_autor=a.cod_autor AND l.cod_editora=e.cod_editora ORDER BY l.cod_livro DESC LIMIT 1";
          $livros = $conexao->query($sql);
          $livro = $livros->fetch();

          $sql="SELECT g.nome AS nome FROM livro l, genero g, genero_livro gl WHERE gl.cod_livro=l.cod_livro AND gl.cod_genero=g.cod_genero AND l.cod_livro=$livro[cod_livro]";
          $generos = $conexao->query($sql);
          ?>

          <div class="modal fade" id="exampleModal_livros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog editar">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?=$livro['tit']?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Autor: <?=$livro['nome_autor']?></p>
                  <p>Editora: <?=$livro['nome_editora']?></p>
                  <p>Gêneros:
                  <?php
                  foreach($generos as $g)
                    echo ''.$g['nome'].'/';
                  ?>
                  </p>
                  <p>Páginas: <?=$livro['pag']?></p>
                  <p>Ano: <?=$livro['ano']?></p>
                  <p>Edição: <?=$livro['edi']?></p>
                  <p>Sinopse: <?=$livro['sin']?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Autores-->
          <?php
          require_once 'include/conexao.php';
          $sql = "SELECT * FROM autor ORDER BY cod_autor DESC LIMIT 1";
          $autores = $conexao->query($sql);
          $autor = $autores->fetch();
          ?>

          <div class="modal fade" id="exampleModal_autores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog editar">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class='modal-title' id='exampleModalLabel'><?=$autor['nome']?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Data de Nascimento: <?=$autor['nasc']?></p>
                  <p>Nacionalidade: <?=$autor['nacio']?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Editoras-->
          <?php
          require_once 'include/conexao.php';
          $sql = "SELECT * FROM editora ORDER BY cod_editora DESC LIMIT 1";
          $editoras = $conexao->query($sql);
          $editora = $editoras->fetch();
          ?>

          <div class="modal fade" id="exampleModal_editoras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog editar">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?=$editora['nome']?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Origem: <?=$editora['origem']?></p>
                  <p>Ano de Fundação: <?=$editora['ano']?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Gêneros-->
          <?php
          require_once 'include/conexao.php';
          $sql = "SELECT * FROM genero ORDER BY cod_genero DESC LIMIT 1";
          $generos = $conexao->query($sql);
          $genero = $generos->fetch();
          ?>

          <div class="modal fade" id="exampleModal_generos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog editar">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?=$genero['nome']?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Editar</button>
                </div>
              </div>
            </div>
          </div>

          <?php
          require_once 'include/conexao.php';
          $sql = "SELECT * FROM autor ORDER BY nome";
          $sautor = $conexao->query($sql);
          $sql = "SELECT * FROM editora ORDER BY nome";
          $seditora = $conexao->query($sql);
          $sql = "SELECT * FROM genero ORDER BY nome";
          $sgenero = $conexao->query($sql);
          //S de selecionar
          ?>

          <!-- Modal Adicionar Livros-->
          <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Livro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <!-- Conteúdo do Modal 1 -->
                  <form action="actions/salvar_livro.php" method="post">
                    <div>
                      <label for="nome">Título: </label>
                      <input type="text" placeholder="Digite o Título" name="titulo">
                    </div>
                    <!-- Autor -->
                    <div>
                        <label for="autor">Autor:</label>
                        <select name="autor_id" id="autor">
                            <?php
                            foreach($sautor as $s){
                                echo '<option value="'.$s['cod_autor']. '">';
                                echo $s['nome']; #nome do estado
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                      <label for="editora">Editora:</label>
                      <select name="editora_id" id="editora">
                            <?php
                            foreach($seditora as $s){
                                echo '<option value="'.$s['cod_editora']. '">';
                                echo $s['nome']; #nome do estado
                                echo '</option>';
                            }
                            ?>
                      </select>
                    </div>
                    <div>
                      
                      <p>Gêneros</p>
                      <?php
                      foreach($sgenero as $s){
                          echo '<input  name= '.$s['nome'].'  id='.$s['nome'].' type="checkbox">';
                          echo "<label for=".$s['nome'].">".$s['nome']."</label>";
                          echo "<br>";
                      }
                      ?>
                      <p></p>
                    </div>
                    <div>
                      <label for="pg">Páginas: </label>
                      <input type="number" min="0" placeholder="Número de Páginas" name="pagina" required>
                    </div>
                    <div>
                        <label for="ano">Ano: </label>
                        <input type="number" min="0" placeholder="Ano de Lançamento" name="ano" required>
                    </div>
                    <div>
                      <label for="edicao">Edição: </label>
                      <input type="text" placeholder="Edição do Livro" name="edicao" required>
                    </div>
                    <div>
                      <label for="comentario">Sinopse</label>
                      <br>
                      <textarea placeholder="Sinopse do Livro" name="sinopse" id="sinopse" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <input type="submit" value="Salvar">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Adicionar Autores-->
          <div class="modal fade" id="exampleModalAdd_autor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Autor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <!-- Conteúdo do Modal 1 -->
                  <form action="actions/salvar_autor.php" method="post">
                    <div>
                      <label for="nome">Nome: </label>
                      <input type="text" placeholder="Digite o nome" name="nome" required>
                    </div>
                    <div>
                      <label for="nome">Nacionalidade: </label>
                      <input type="text" placeholder="Digite o País" name="nacionalidade" required>
                    </div>
                    <div>
                      <label for="nasc">Data de Nascimento:</label>
                      <input type="date" name="nascimento" id="nascimento" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <input type="submit" value="Salvar">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Adicionar Editoras-->
          <div class="modal fade" id="exampleModalAdd_editora" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Editora</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <!-- Conteúdo do Modal 1 -->
                  <form action="actions/salvar_editora.php" method="post">
                    <div>
                      <label for="nome">Nome: </label>
                      <input type="text" placeholder="Digite o nome" name="nome" required>
                    </div>
                    <div>
                      <label for="nome">Origem: </label>
                      <input type="text" placeholder="Digite o País de Origem" name="origem" required>
                    </div>
                    <div>
                      <label for="rg">Ano de Fundação: </label>
                      <input type="number" min="0" placeholder="Digite o Ano de Fundação" name="ano" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <input type="submit" value="Salvar">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Adicionar Generos-->
          <div class="modal fade" id="exampleModalAdd_genero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Gênero</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <!-- Conteúdo do Modal 1 -->
                  <form action="actions/salvar_genero.php" method="post">
                    <div>
                      <label for="nome">Nome: </label>
                      <input type="text" placeholder="Digite o nome" name="nome" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <input type="submit" value="Salvar">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- Rodapé/Contato -->
        <footer id="contato">
          <div class="esq">
            <img src="img/sociais.png" class="pc" alt="Redes Sociais">
            <img src="img/sociais_celular.png" class="celular" alt="Redes Sociais">
          </div>
          <div>
              <p>© 2023 - Design e Desenvolvimento por Aline e Thiago </p>
          </div>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
