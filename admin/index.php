<?php 
        error_reporting(0);
        include('inc/koneksi.php');
        session_start();
        if($_SESSION['status']!="login"){
            header("Location: ../login.php?info=Login Terlebih Dahulu!");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Painel - Área Administrativa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link rel="shorcut icon" type="image/png" href="assets/img/logoo.png" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
    <!-- Logo -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="./index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="Logo ">&nbsp; 
        <span class="d-none d-lg-block">Área administrativa</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
 
    <!-- Search Bar -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Pesquise" title="Insira palavras-chave de pesquisa">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->

    <!-- Search Icon-->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>    
          </a>
        </li>
        <!-- End Search Icon-->

        <!--Profile Iamge Icon -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile.svg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username']; ?></span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username']; ?></h6>
              <span>Márcio | Dutra</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="setting.php">
                <i class="bi bi-gear"></i>
                <span>Configurações de Conta</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" onClick="return confirm('Kamu yakin untuk logout?')"href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- End Header -->


      <!-- ======= Sidebar ======= -->
    <!--Dashboard -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link  " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Painel</span>   
        </a>
      </li>
      <!-- End Dashboard  -->

      <!--  Service  -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Serviço</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="service-nav" class="nav-content collapse " data-bs-parent="#service-nav">
          <li>
            <a href="add-service.php">
              <i class="bi bi-circle"></i><span>Adicionar serviço</span>
            </a>
          </li>
          <li>
            <a href="manage-service.php">
              <i class="bi bi-circle active"></i><span>Gerenciar serviço</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Service  -->

       <!--  Pages  -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pages-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Paginas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="about-us.php">
              <i class="bi bi-circle"></i><span>Sobre nós</span>
            </a>
          </li>
          <li>
            <a href="location.php">
              <i class="bi bi-circle"></i><span>Localização</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End pages Nav -->

      <!--  customer Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="customer-list.php">
          <i class="bi bi-card-list"></i>
          <span>Lista de clientes</span>
        </a>
      </li>
      <!-- End customer  Nav -->

       <!--  invoices  Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="invoices.php">
          <i class="bi bi-envelope"></i>
          <span>Faturas</span>
        </a>
      </li>
      <!-- End invoices  Nav -->

       <!--  Settings  -->
      <li class="nav-heading">Configurações</li>
      <li class="nav-item">

         <!--  Profile  -->
        <a class="nav-link collapsed" href="setting.php">
          <i class="bi bi-person"></i>
          <span>Configurações</span>
        </a>
      </li>
      <!-- End Profile  -->       

       <!--  Blank  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Em branco</span>
        </a>
      </li>
      <!-- End Blank -->
    </ul>
    <!-- End setting-->
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Painel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Painel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- model Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Cabelo <span>| Modelo</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bx-knife bx-flip-horizontal bx-tada' style='color:#4153f1' ></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                  $sql = mysqli_query($conn, "SELECT * FROM tblservices");
                  $data = mysqli_num_rows($sql); 
                  echo $data;
                  ?>
                      </h6>
                      <span class="text-success small pt-1 fw-bold">Total do serviço</span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End model Card -->

             <!-- model Card -->
             <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Clientes <span>| Serviço</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bxs-user bx-tada' style='color:#4153f1'></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                  $sql = mysqli_query($conn, "SELECT * FROM users");
                  $data = mysqli_num_rows($sql); 
                  echo $data;
                  ?>
                      </h6>
                      <span class="text-success small pt-1 fw-bold">Total de clientes</span> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End model Card -->
      </div>
    </section>
  </main>
  <!-- End #main -->

         <!-- Footer -->
      <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>