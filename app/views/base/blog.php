<?php $this->layout("_theme"); ?>


<main id="content" class="site-main">
  <!-- Inner Banner html start -->
  <section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url(base/assets/img/educator-img12.jpg)">
      <div class="container">
        <div class="inner-banner-content">
          <h1 class="inner-title">Notícias</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Inner Banner html end -->

  <!-- archive html start -->
  <div class="single-post-section">
    <div class="single-post-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 primary right-sidebar">
            <div class="inner-blog-wrap" id="containerNews">
              <!-- Start card post -->
              <article class="post">
                <figure class="feature-image">
                  <img src="base/assets/img/educator-img12.jpg" alt="" style="max-height: 300px;" />
                  <span class="cat-meta">
                    <a href="blog/details/1">EDUCAÇÃO</a>
                  </span>
                </figure>
                <div class="entry-content">
                  <h4>
                    <a href="blog/details/1" class="title-dots">Grupo de alunos compartilhando suas ideias</a>
                  </h4>
                  <p class="blog-info description-dots">
                    Velit beatae cursus mollitia excepturi. Porttitor mus
                    primis nisl voluptate
                  </p>
                </div>
              </article>
              <!-- End card post -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- archive html end -->
</main>

<script src="<?= BASE_ACTIONS . "/actions_news.js"  ?>"></script>