<?php
    require_once('../Controllers/clientsController.php');

    $controller = new clientsController();

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller->{$action}();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./bootstrap/css/" />
    <link rel="stylesheet" href="./bootstrap/app/Views/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./bootstrap/app/Views/bootstrap/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./bootstrap/app/Views/bootstrap/css/publicacao.css" />
    <title>Scilink</title>
  </head>
  <body>
    
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <img src="./bootstrap/app/Views/bootstrap/images/logopb.png" style="width: 2%; padding-left: 1vh; padding-right: 1vh">
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Scilink</a> 
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Pesquise a tag desejada"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit"  
              style="background-color: #32d800;
              border: solid 1px rgb(50, 216, 0);">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="./PaginaPerfil.php">Meu Perfil</a></li>
                <li><a class="dropdown-item" href="./CadastroPerfil.php">Editar Perfil</a></li>
                <li>
                  <a class="dropdown-item" href="./LoginCadastro.php">Sair</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0" style="background-color: #353c42">
        <nav class="navbar-dark" >
          <ul class="navbar-nav">
          
            

            <li>
              <a href="./FormularioPubli.php" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
              
              >
              
                <span class="me-2"><i class='bi bi-bookmarks-fill'></i></span>
                <span>Publicações</span>
                <span class="ms-auto">
                  <span class="right-icon">
                  </span>
                </span>
              </a>
              
            </li>
            <li>
              <a href="./FormularioPubli.php" class="nav-link px-3">
                <span class="me-2"><i class='bi bi-pencil-square'></i></span>
                <span>Criar Publicação</span>
              </a>
            </li>
            
              <a href="./PaginaPerfil.php" class="nav-link px-3">
                <span class="me-2"><i class='bi bi-people-fill'></i></span>
                <span>Meu Perfil</span>
              </a>
            </li>
            <li>
              <a href="./LoginCadastro.php" class="nav-link px-3">
                <span class="me-2"><i class='bi bi-box-arrow-left'></i></span>
                <span>Sair</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
        </div>
      </div>

      <table>
        <tr>
          <td class="titulo" ><h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4></td>
        </tr>
        <tr>
          <td class="res"><p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quae voluptas? Ab, laudantium. Adipisci in laudantium sit eveniet nobis perferendis, temporibus cumque vero nostrum porro tempora eligendi, sint deleniti voluptatem.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequuntur nemo error quas dignissimos sequi aut eligendi porro distinctio ex hic, architecto explicabo itaque, magni impedit exercitationem recusandae eaque quo.
            <br><br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quae voluptas? Ab, laudantium. Adipisci in laudantium sit eveniet nobis perferendis, temporibus cumque vero nostrum porro tempora eligendi, sint deleniti voluptatem.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequuntur nemo error quas dignissimos sequi aut eligendi porro distinctio ex hic, architecto explicabo itaque, magni impedit exercitationem recusandae eaque quo.
          </p></td>
        </tr>
          <td class="dt"><div>
            <p>Data Inicial: 00/00/000</p> <p>Data Final: 00/00/0000</p> <p>Contato: 99 99999-9999</p><p>Facebook: Lorem</p> <p>Linkedin: Lorem</p> <p>Instagram @Lorem</p></div>
              
            </p></div></td>
      </table>

      <a href="./Home.php" class="btnVoltar">Voltar</a>

   

    </main>
    <script src="./bootstrap/app/Views/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./bootstrap/app/Views/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="./bootstrap/app/Views/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="./bootstrap/app/Views/bootstrap/js/dataTables.bootstrap5.min.js"></script>
    <script src="./bootstrap/app/Views/bootstrap/js/script.js"></script>
  </body>
</html>
