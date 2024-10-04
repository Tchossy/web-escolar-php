<?php $this->layout("_theme"); ?>

<main id="content" class="site-main">
  <!-- Inner Banner html start-->
  <section class="inner-banner-wrap mb-0">
    <div class="inner-baner-container" style="background-image: url(base/assets/img/educator-img12.jpg)">
      <div class="container">
        <div class="inner-banner-content">
          <h1 class="inner-title">Nossos cursos profissionais</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Inner Banner html end-->

  <!-- home Course section start -->
  <div class="home-course-section feature-page-section">
    <div class="container">
      <div class="inner-course-wrap">
        <div id="containerCourse" class="row d-flex justify-content-center justify-content-xl-start">
          <!-- Start Card Course  -->
          <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
            <article class="post">
              <figure class="feature-image">
                <img src="base/assets/img/educator-img-course-1.jpg" alt="" />
              </figure>
              <div class="entry-content">
                <h4>
                  <a href="ensinos-medio/details/1">Informática</a>
                </h4>

                <div class="author-content">
                  <h6 class="author-name">
                    Preparação focada em tecnologia da informação,
                    desenvolvimento de software e redes.
                  </h6>
                </div>
                <div class="entry-meta">
                  <span class="student-number">
                    <i aria-hidden="true" class="fas fa-clock"></i>
                    4 anos
                  </span>
                  <a href="ensinos-medio/details/1">
                    Detalhes do curso
                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                  </a>
                </div>
              </div>
            </article>
          </div>
          <!-- Start Card Course  -->

        </div>
      </div>
    </div>
  </div>
  <!-- home Course section end-->
</main>

<script src="<?= BASE_ACTIONS . "/actions_course.js"  ?>"></script>