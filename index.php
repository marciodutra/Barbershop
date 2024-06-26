<?php
session_start();
error_reporting(0);
include('inc/koneksi.php');
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shorcut icon" type="image/png" href="assets/img/logo.png" />
    <script src="assets/sciript.js" defer></script>
    <title>Márcio Dutra</title>
  </head>
  <body>
      <!-- navbar -->
      <?php include'inc/header.php'; ?>
        <!-- navbar end -->

        <!-- Scroll -->
        <button class="go-top-btn">
        <img src="assets/img/arrow-up.png" alt="arrow up">
        </button>
       <!-- End Scroll -->

    <!-- Banner Start -->
    <section class="hero container">
      <div class="mt-5">
        <div class="row ms-3">
          <div class="col-md-6">
            <h1 class="fw-bold">
              Márcio Dutra <br />
              Barbeiro
            </h1>
            <p class="text-muted mt-3">
            Encontre um barbeiro profissional que deixe seu cabelo visível
              <div id="typing">Bonito e arrumado</div>
             <div id="line">|</div>
            </p>
            <a
              href=""
              class="btn btn-color-theme pe-4 ps-4 pt-2 mt-3"
              >Explorar agora</a
            >
            <a
              href="user/login.php"
              class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-3"              >
                Obter faturas
            </a>
          </div>
          <div class="col-md-6 mt-2">
            <img
              class="img-banner img-fluid"
              src="assets/img/banner.svg"
              alt="barber logo"
              width="500px"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

    <!-- Service-->
    <span id='service'></span>
    <section class="popular-barber bg-theme pt-2 pb-2 mt-5">
      <div class="container">
        <div class="row">
          <h3 class="fw-bold ms-3" >           
            Lista
            <span class="text-theme">Serviço</span>
          </h3>
          <hr>
        </div>
        <div class="row mt-3">
        <?php
                $ret=mysqli_query($conn,"select * from  tblservices");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) {
                ?>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                 <img src="./admin/assets/img/<?php echo $row['Image']?>"
                  alt="Buzz Cut"  
                  width="100"
                   class="border-radius-10 img-fluid"
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold"><?php  echo $row['ServiceName'];?></h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Cliente</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-1 mt-4">Descrição do Serviço</h5>
                <p class="text-muted ms-1 mb-2"><?php  echo $row['ServiceDescription'];?> </p>
                <h5 class="font-weight-bold price-theme mt-3 ms-1">Taxa de serviço: R$.<?php  echo $row['Cost'];?></h5>
              </div>
            </div>
          </div>
          <br><?php 
          $cnt=$cnt+1;
          }?>
        </div>
        </div>
      </div>
    </section>
    <!-- Service End -->
    
    <!-- Contact Start -->
    <span id='contact'></span>
    <section class="about mt-5 pd-5" id="contact">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="assets/img/aboutBarber.svg" width="500px" class="img-fluid" alt="contact Image" />
          </div>
          <div class="col-md-6">
            <h2 class="fw-bold">
            Contato
            </h2>
            <hr>
            <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="proses/prosess.php"method="post">
                    <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                        <div class="row">
                        <div class="twice-two col-6">
                            <input type="text" class="form-control" style="height: 50px;" name="name" id="name" placeholder="Nome completo" required autocomplete="off"><br>
                        </div>
                        <div class="twice-two col-6">
                            <input type="email" class="form-control" style="height: 50px;" class="form-control" placeholder="Email" required name="email"><br>
                        </div>
                        </div>
                        <textarea class="form-control message"  style="height: 138px;" id="pesan" name="pesan" maxlength="500" placeholder="Mensagem" required=""></textarea>
                        <button type="submit" class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-3" name="submit">Enviar mensagem</button>
                    </form>
                </div>
            </div>
          </div>
          <!-- Contact End -->

           <!-- FAQ Start -->
           <span id='faq'></span>
          <div class="row ">
            <div class="col-md-6 mt-5">
                <h1 class="fw-bold mt-5">Perguntas frequentes
                  <span class="text-theme">(F.A.Q)</span>
                </h1>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNol">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNol" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p>
                        Quanto custa um corte de cabelo na Márcio Dutra?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseNol" class="accordion-collapse collapse" aria-labelledby="flush-headingNol" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Os preços dos cortes variam dependendo do tipo de corte desejado.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p>                       
                            Há lavagem de cabelo disponível aqui?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"> barbearia Márcio Dutra tende a não fazer isso, então se seu cabelo estiver arrumado você pode ir direto para casa.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p>
                        Podemos ver o histórico de pagamentos?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Claro, Lily, o filho da barbearia, pode ver o histórico de pagamentos fazendo primeiro login em Obter faturas</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <p>
                        O que fazer se não ficar satisfeito com o resultado do seu corte de cabelo?
                    </p>
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">O melhor é falar imediatamente com o seu cabeleireiro para arrumar o corte de cabelo e encontrar uma solução que satisfaça ambas as partes..</div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
              <img src="assets/img/aboutBarber 2.svg" width="600px" class="img-fluid"alt="About Image">
            </div>
          </div>
          <!-- FAQ End -->

           <!-- Location  -->
          <span id='location'></span>
          <?php
          $ret=mysqli_query($conn,"select * from tblpage where PageType='location' ");
          $cnt=1;
          while ($row=mysqli_fetch_array($ret)) {
          ?>
          <div class="row mt-5">
          <div class="col-md-6">
          <?php  echo $row['PageDescription'];?>
          </div>
          <div class="col-md-6">
            <h2 class="fw-bold">
            <?php  echo $row['PageTitle'];?>
            </h2>
            <?php } ?>
            <hr>
            <div class="map-content-9 mt-lg-0 mt-4">
            <p class="text-muted">A Márcio Dutra Barbershop ainda não abriu outra filial, só há um local que você pode visitar. </p>
          </div>
            </div>
          </div>
            <!-- Location  End -->
        </div>
      </div>
    </section>

        <!-- Footer -->
        <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
