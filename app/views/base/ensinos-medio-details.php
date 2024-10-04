<?php $this->layout("_theme"); ?>

<main id="content" class="site-main">
  <!-- Inner Banner html start-->
  <section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url(/base/assets/img/educator-img12.jpg)">
      <div class="container">
        <div class="inner-banner-content">
          <h1 id="title_course" class="inner-title"> --- </h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Inner Banner html end-->

  <!-- Secção de detalhes do curso html start detail section html start  -->
  <div class="career-detail-section">
    <div class="career-detail-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="career-detail-container">
              <div class="job-description">
                <ul>
                  <li>
                    <span>Duração :</span>
                    <h5 id="years"> --- </h5>
                  </li>
                  <li>
                    <span>Turno :</span>
                    <h5 id="period"> --- </h5>
                  </li>
                  <li>
                    <span>Mesalidade :</span>
                    <h4 id="monthly_course"> --- </h4>
                  </li>
                </ul>
                <figure class="job-imgage">
                  <img id="image-course" src="/base/assets/img/educator-img14.jpg" alt="" />
                </figure>
              </div>
              <div class="tab-container">
                <div class="responsive-tabs">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                        Descrição do Curso
                      </a>
                    </li>
                    <li class="nav-item">
                      <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                        Estrutura do Curso
                      </a>
                    </li>
                    <li class="nav-item">
                      <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                        Requisito
                      </a>
                    </li>
                  </ul>
                  <div id="nav-tab-content" class="tab-content" role="tablist">
                    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                      <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                          <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true"
                            aria-controls="collapse-A">
                            Descrição
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel"
                        aria-labelledby="heading-A">
                        <div class="card-body">
                          <p id="description_course">
                            ---
                          </p>
                        </div>
                      </div>
                    </div>

                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                      <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
                            aria-controls="collapse-B">
                            Estrutura do Curso
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                        aria-labelledby="heading-B">
                        <div class="card-body">
                          <!-- <h5>#Fundamentos da Informática:</h5> -->
                          <ul id="course_structure">
                            <li>
                              ---
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                      <div class="card-header" role="tab" id="heading-C">
                        <h5 class="mb-0">
                          <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true"
                            aria-controls="collapse-C">
                            Requisito
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                        aria-labelledby="heading-C">
                        <div class="card-body">
                          <p id="span-requirement">
                            ---
                          </p>
                          <ul id="requerements">
                            <li> --- </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 order-lg-first">
            <div class="sidebar">
              <div class="widget-bg sidebar-list">
                <h5 class="bg-title">Como se inscrever?</h5>
                <ul>
                  <li id="how_to_apply">
                    <i aria-hidden="true" class="fas fa-minus"></i>
                    <i class="list-txt"> --- </i>
                  </li>
                </ul>
              </div>
              <div class="widget-bg faq-widget">
                <h5 class="bg-title">Perguntas frequentes</h5>
                <div id="sidebar-tab-content" class="accordion-content" role="tablist">
                  <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="qus-A">
                      <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true"
                          aria-controls="collapse-one">
                          Quando começam as aulas?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-one" class="collapse show" data-bs-parent="#sidebar-tab-content" role="tabpanel"
                      aria-labelledby="qus-A">
                      <div class="card-body">
                        As aulas iniciam no começo de cada ano letivo,
                        geralmente na primeira semana de Setembro. As
                        datas exatas podem variar de acordo com o
                        calendário da escola.
                      </div>
                    </div>
                  </div>
                  <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="qus-B">
                      <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false"
                          aria-controls="collapse-two">
                          Qual a duração do curso?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-two" class="collapse" data-bs-parent="#sidebar-tab-content" role="tabpanel"
                      aria-labelledby="qus-B">
                      <div class="card-body">
                        O curso tem a duração de 3 anos, abrangendo da 10ª
                        até a 13ª Classe, com módulos práticos e teóricos
                        ao longo desse período.
                      </div>
                    </div>
                  </div>
                  <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="tab-C">
                    <div class="card-header" role="tab" id="qus-C">
                      <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true"
                          aria-controls="collapse-three">
                          Quais são os horários das aulas?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content" role="tabpanel"
                      aria-labelledby="qus-C">
                      <div class="card-body">
                        As aulas são realizadas em período integral, das
                        7h30 às 12h30 no periodo da manhâ e das 13h00 ás
                        17h30, com intervalos regulares para descanso e
                        alimentação
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  career detail section html end -->
</main>

<script src="<?= BASE_ACTIONS . "/actions_course_details.js"  ?>"></script>