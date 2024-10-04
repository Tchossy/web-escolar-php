<?php $this->layout("_theme"); ?>


<main id="content" class="site-main">
  <!-- home banner section html start -->
  <section class="home-banner d-flex align-items-end">
    <div class="container">
      <div class="row align-items-end">
        <div class="banner-left col-md-6">
          <div class="image-overlay pattern-overlay"></div>
          <div class="banner-content">
            <div class="title-divider"></div>
            <div class="banner-title">
              <h1>O Pensador <br>do Futuro II</h1>
            </div>
            <div class="banner-text">
              <p>
                Com um ensino focado no desenvolvimento completo do aluno,
                estamos comprometidos em fornecer as ferramentas e o
                conhecimento necessários para garantir um futuro de
                sucesso e oportunidades. Prepare-se para uma jornada
                educacional única e desafiadora.
              </p>
            </div>
            <div class="banner-button">
              <a href="/blog" class="button-round-secondary">SAIBA MAIS</a>
            </div>
          </div>
        </div>
        <div class="banner-right col-md-6">
          <figure class="banner-img">
            <div class="image-overlay-oval pattern-overlay"></div>
            <img src="<?= BASE_IMG . "/img/educator-img33.png" ?>" alt="" />
          </figure>
        </div>
      </div>
    </div>
    <div class="overlay-image pattern-overlay"></div>
  </section>

  <!-- home about section html start -->
  <section class="home-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-left-content">
            <figure class="figure-round-border">
              <img src="<?= BASE_IMG . "/img/educator-img13.jpg" ?>" alt="" />
            </figure>

            <div class="regarding-us">
              <div class="qulifaction-content left-content">
                <div class="qualification-tag">
                  <div class="qualifaction-icon">
                    <i aria-hidden="true" class="icon icon-medal1"></i>
                  </div>
                  <div class="qualifaction-title">
                    <h5>Instituto certificado</h5>
                  </div>
                </div>
                <div class="qulifaction-detail">
                  <p>
                    Somos uma instituição certificada, reconhecida por
                    nossa qualidade educacional e infraestrutura moderna.
                    Comprometidos com o ensino de excelência.
                  </p>
                </div>
              </div>
              <div class="qulifaction-content right-content">
                <div class="qualification-tag">
                  <div class="qualifaction-icon">
                    <i aria-hidden="true" class="icon icon-man"></i>
                  </div>
                  <div class="qualifaction-title">
                    <h5>Professores qualificados</h5>
                  </div>
                </div>
                <div class="qulifaction-detail">
                  <p>
                    Nosso corpo docente é composto por profissionais
                    experientes e dedicados, prontos para guiar os alunos
                    em cada etapa de sua jornada de aprendizado.
                  </p>
                </div>
              </div>
            </div>
            <div class="about-btn">
              <a href="/about" class="button-round-secondary">MAIS SOBRE NÓS</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-right-content">
            <div class="title-divider"></div>
            <h2 class="about-title">
              Por que nossos alunos nos escolhem?
            </h2>
            <p class="about-desc">
              Oferecemos uma experiência educacional de excelência com
              professores qualificados e um currículo que prepara nossos
              alunos para os desafios do futuro. Nosso compromisso com a
              qualidade e inovação torna o aprendizado uma jornada
              envolvente e transformadora.
            </p>
            <figure class="figure-round-border">
              <img src="<?= BASE_IMG . "/img/educator-img12-500px.jpg" ?>" alt="" />
            </figure>
          </div>
        </div>
      </div>
      <div class="pattern-overlay"></div>
    </div>
  </section>
  <!-- home service section html start -->
  <!-- <section class="home-service">
    <div class="pattern-overlay"></div>
    <div class="container">
      <div class="service-wrapper">
        <div class="pattern-circle overlay"></div>
        <div class="service-content">
          <div class="section-head">
            <div class="title-divider"></div>
            <h2>Nossas melhores categorias</h2>
            <div class="service-btn">
              <a href="categories.html" class="button-round-primary">MAIS CATEGORIAS</a>
            </div>
          </div>
          <div class="course-type">
            <div class="course-icon">
              <i aria-hidden="true" class="icon icon-Helmet"></i>
            </div>
            <h4 class="course-title">
              <a href="ensino-medio-details.html"> Engenharia </a>
            </h4>
            <p class="course-durations">8 semestre</p>
          </div>
          <div class="course-type">
            <div class="course-icon">
              <i aria-hidden="true" class="icon icon-design"></i>
            </div>
            <h4 class="course-title">
              <a href="ensino-medio-details.html"> TI e software </a>
            </h4>
            <p class="course-durations">6 semestre</p>
          </div>
          <div class="course-type">
            <div class="course-icon">
              <i aria-hidden="true" class="icon icon-microscope"></i>
            </div>
            <h4 class="course-title">
              <a href="ensino-medio-details.html"> Química </a>
            </h4>
            <p class="course-durations">8 semestre</p>
          </div>
        </div>
        <div class="service-content">
          <div class="course-type">
            <div class="course-icon">
              <i aria-hidden="true" class="icon icon-Consultancy"></i>
            </div>
            <h4 class="course-title">
              <a href="ensino-medio-details.html"> Gestão </a>
            </h4>
            <p class="course-durations">5 semestre</p>
          </div>
          <div class="course-type">
            <div class="course-icon">
              <i aria-hidden="true" class="icon icon-pencil_art"></i>
            </div>
            <h4 class="course-title">
              <a href="ensino-medio-details.html"> Literatura </a>
            </h4>
            <p class="course-durations">6 semestre</p>
          </div>
          <div class="course-form">
            <h3>Obtenha cursos gratuitos! Reserve sua vaga agora.</h3>
            <div class="course-field">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="name" placeholder="Your Name.." />
                </div>
                <div class="col-sm-6">
                  <input type="email" name="name" placeholder="Your Email.." />
                </div>
                <div class="col-sm-7">
                  <input type="text" name="name" placeholder="Your Subject.." />
                </div>
                <div class="col-sm-5">
                  <button type="submit" class="button-round-secondary">
                    RESERVE VAGA
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- home Course section html start -->
  <section class="home-course-section">
    <div class="container">
      <div class="overlay-wrapper">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="title-divider"></div>
            <h2 class="section-title">
              Cursos em Destaque no Ensino Médio
            </h2>
            <p class="course-section-info">
              Explore nossos cursos do Ensino Médio, projetados para
              preparar os alunos para os desafios acadêmicos e
              profissionais. Com foco em áreas-chave do conhecimento,
              nossos programas proporcionam uma base sólida para o sucesso
              futuro.
            </p>
          </div>
        </div>
        <div class="inner-course-wrap">
          <div id="containerCourse" class="row d-flex justify-content-center justify-content-xl-start">
            <!-- Start Card Course  -->

            <!-- Start Card Course  -->

          </div>
        </div>
        <div class="course-bhn">
          <a href="/ensinos-medio" class="button-round-primary">VER TODOS OS CURSOS</a>
        </div>
        <div class="overlay overlay-circle"></div>
        <div class="pattern-overlay"></div>
      </div>
    </div>
  </section>
  <!-- home fact section html start -->
  <section class="home-fact-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="fact-section-head">
            <div class="title-divider"></div>
            <h2 class="fact-section-title">
              Desperte seu potencial e Transforme seu futuro !
            </h2>
            <p class="fact-section-info">
              Nossos alunos saem daqui preparados para o mercado de
              trabalho, com as habilidades e conhecimentos necessários
              para construir uma carreira de sucesso. Venha fazer parte
              dessa história!
            </p>
            <div class="fact-list">
              <ul>
                <li>
                  Aprendizagem personalizada: Adaptamos nossos métodos ao
                  seu ritmo e estilo de aprendizado.
                </li>
                <li>
                  Professores experientes: Nossa equipe é composta por
                  profissionais altamente qualificados e apaixonados pelo
                  ensino.
                </li>
                <li>
                  Comunidade engajada: Faça parte de uma rede de alunos e
                  profissionais que compartilham seus mesmos objetivos.
                </li>
              </ul>
            </div>
            <div class="service-btn">
              <a href="/contact" class="button-round-secondary">JUNTE-SE A NÓS AGORA</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="fact-right-inner-wrap">
            <div class="fact-inner-box">
              <div class="fact-content top-left-content">
                <div class="pattern-overlay circle-patten"></div>
                <h4>
                  Uma educação de qualidade para um futuro brilhante
                </h4>
              </div>
              <figure class="fact-image top-right-image"></figure>
              <figure class="fact-image bottom-left-image"></figure>
              <div class="fact-content bottom-right-content">
                <div class="pattern-overlay circle-c-patten"></div>
                <h4>
                  professores altamente qualificados e uma infraestrutura
                  moderna
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- home feature section html start -->
  <section class="home-feature-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="title-divider"></div>
          <h2 class="feature-section-title text-center">
            Nossos diferenciais para o seu sucesso
          </h2>
          <p class="feature-section-info text-center">
            Saepe quo labore aenean dictumst expedita commodi auctor,
            nisl, lorem iusto feugiat nemo reiciendis laboris.
          </p>
        </div>
      </div>
      <div class="feature-wrapper">
        <div class="feature-type">
          <div class="feature-icon">
            <h5 class="meta-no">1</h5>
            <i aria-hidden="true" class="icon icon-management"></i>
          </div>
          <h4 class="feature-heading">Professores qualificados</h4>
          <p class="feature-info">
            Nossa equipe de professores é composta por profissionais
            altamente qualificados e com ampla experiência em suas áreas
            de atuação.
          </p>
        </div>
        <div class="feature-type">
          <div class="feature-icon">
            <h5 class="meta-no">2</h5>
            <i aria-hidden="true" class="icon icon-Money-2"></i>
          </div>
          <h4 class="feature-heading">Cursos acessíveis</h4>
          <p class="feature-info">
            Oferecemos diversas opções de cursos, com diferentes formatos
            e horários, para que você possa estudar no seu ritmo e de
            acordo com sua disponibilidade.
          </p>
        </div>
        <div class="feature-type">
          <div class="feature-icon">
            <h5 class="meta-no">3</h5>
            <i aria-hidden="true" class="icon icon-atomic"></i>
          </div>
          <h4 class="feature-heading">Eficiente e flexível</h4>
          <p class="feature-info">
            Nossos cursos são práticos e objetivos, focados em desenvolver
            as habilidades que você precisa para alcançar seus objetivos.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- home team section html start -->
  <section class="home-team-section">
    <div class="container">
      <div class="overlay"></div>
      <div class="row align-items-end">
        <div class="col-md-6 text-md-start text-center">
          <div class="title-divider"></div>
          <h2 class="team-section-title">
            Conheça os nossos laboratórios
          </h2>
        </div>
      </div>
      <div class="group-member">
        <div class="row">
          <!-- Start Card professor -->
          <div class="col-sm-6 col-lg-3 p-4">
            <figure class="team-img">
              <img src="<?= BASE_IMG . "/img/educator-img8.png" ?>" alt="" />
            </figure>
            <div class="team-content text-center">
              <h4>
                <a>Lab. de Informática</a>
              </h4>
              <p>Ideal para desenvolvimento de projetos e pesquisas.</p>
            </div>
          </div>
          <!-- End Card professor -->

          <!-- Start Card professor -->
          <div class="col-sm-6 col-lg-3 p-4">
            <figure class="team-img">
              <img src="<?= BASE_IMG . "/img/educator-img11.png" ?>" alt="" />
            </figure>
            <div class="team-content text-center">
              <h4>
                <a>Lab. de Construção Civil</a>
              </h4>
              <p>Construa o futuro com a gente! </p>
            </div>
          </div>
          <!-- End Card professor -->

          <!-- Start Card professor -->
          <div class="col-sm-6 col-lg-3 p-4">
            <figure class="team-img">
              <img src="<?= BASE_IMG . "/img/educator-img9.png" ?>" alt="" />
            </figure>
            <div class="team-content text-center">
              <h4>
                <a>Lab. de Electricidade</a>
              </h4>
              <p>Descubra os princípios da eletricidade e eletrônica</p>
            </div>
          </div>
          <!-- End Card professor -->

          <!-- Start Card professor -->
          <div class="col-sm-6 col-lg-3 p-4">
            <figure class="team-img">
              <img src="<?= BASE_IMG . "/img/educator-img10.png" ?>" alt="" />
            </figure>
            <div class="team-content text-center">
              <h4>
                <a>Lab. de Mecânica</a>
              </h4>
              <p>Desvende os mistérios das máquinas e mecanismos</p>
            </div>
          </div>
          <!-- End Card professor -->
        </div>
      </div>
    </div>
  </section>
  <!-- home goal section html start -->
  <section class="home-goal-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="inner-goal-image">
            <figure class="video-play-image">
              <img src="<?= BASE_IMG . "/img/educator-img13.jpg" ?>" alt="" />
              <div class="overlay02 overlay"></div>
            </figure>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="goal-content">
            <div class="pattern-overlay"></div>
            <div class="title-divider"></div>
            <h2 class="goal-title">
              Comprometidos com os melhores resultados !
            </h2>
            <p class="goal-info">
              Per sed, mattis. Integer viverra euismod maecenas incidunt,
              phasellus consequatur aliquam nihil temporibus in assumens
              deserunt convallis, eius.
            </p>
            <a href="contact.html" class="button-round-secondary">JUNTE-SE A NÓS AGORA</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- home progress section html start -->
  <div class="home-progress-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="counter-inner">
        <div class="counter-item-wrap row">
          <div class="col-lg-3 col-sm-6 counter-item">
            <div class="counter-no">
              <span class="counter">257</span>+
            </div>
            <div class="Completed">Estudantes</div>
          </div>
          <div class="col-lg-3 col-sm-6 counter-item">
            <div class="counter-no"><span class="counter">4</span></div>
            <div class="Completed">Cursos Tecnicos</div>
          </div>
          <div class="col-lg-3 col-sm-6 counter-item">
            <div class="counter-no"><span class="counter">14</span>+</div>
            <div class="Completed">Professores</div>
          </div>
          <div class="col-lg-3 col-sm-6 counter-item">
            <div class="counter-no">
              <span class="counter">35</span>
            </div>
            <span class="Completed"> Prêmio conquistado </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- home testimonial section html start -->
  <section class="home-testimonial-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="title-divider-center"></div>
          <h2 class="testimonial-section-title text-center">
            Depoimentos dos nossos alunos
          </h2>
          <p class="testimonial-section-info text-center">
            Descubra o que nossos alunos têm a dizer sobre a experiência
            de estudar conosco. Veja como nossos métodos de ensino
            inovadores e professores dedicados fazem a diferença na vida
            de cada um.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="client-content left-content">
            <div class="pattern-overlay circle-patten"></div>
            <p class="client-review">
              A flexibilidade dos horários e a qualidade do ensino me
              permitiram conciliar os estudos com o trabalho. Os
              professores são muito atenciosos e sempre dispostos a
              ajudar.”
            </p>
            <div class="author-content">
              <div class="author-info">
                <h5 class="author-name">Raimundo Kilende</h5>
                <span class="author-title">ESTUDANTE DE MECANICA</span>
              </div>
              <figure class="author-img">
                <img src="<?= BASE_IMG . "/img/educator-img22.jpg" ?>" alt="Estudante Raimundo" />
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="client-content right-content">
            <div class="pattern-overlay circle-patten"></div>
            <p class="client-review">
              Ambiente criativo e inspirador da escola me motivou a
              desenvolver meus projetos. Os professores me incentivaram a
              explorar novas técnicas e a encontrar meu próprio estilo.”
            </p>
            <div class="author-content">
              <div class="author-info">
                <h5 class="author-name">Janeth Pilartes</h5>
                <span class="author-title">ESTUDANTE DE INFORMÁTiCA</span>
              </div>
              <figure class="author-img">
                <img src="<?= BASE_IMG . "/img/educator-img21.jpg" ?>" alt="Estudante Janeth" />
              </figure>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="testimonial-btn text-center">
        <a href="testimonial.html" class="button-round-primary">MAIS AVALIAÇÕES AGORA</a>
      </div> -->
    </div>
  </section>
  <!-- home blog section html start -->
  <section class="home-blog-section">
    <div class="container">
      <div class="overlay-wrapper">
        <div class="pattern-overlay c-patten"></div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="title-divider-center"></div>
            <h2 class="blog-section-title text-center">
              Confira nosso blog
            </h2>
            <p class="blog-section-info text-center">
              Saepe quo labore aenean dictumst expedita commodi auctor,
              nisl, lorem iusto feugiat nemo reiciendis laboris.
            </p>
          </div>
        </div>
        <div class="inner-blog-wrap" id="containerNews">
          <!-- Card Blog -->
          <article class="post">
            <figure class="feature-image">
              <img src="<?= BASE_IMG . "/img/educator-img12.jpg" ?>" alt="" />
              <span class="cat-meta">
                <a href="blog-archive.html">EDUCAÇÃO</a>
              </span>
            </figure>
            <div class="entry-content">
              <h4>
                <a href="blog-single.html">Grupo de alunos compartilhando suas ideias</a>
              </h4>
              <p class="blog-info">
                Velit beatae cursus mollitia excepturi. Porttitor mus
                primis nisl voluptate
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- home slider section html start -->
  <div class="slider-section">
    <div class="container">
      <div class="client-slider text-center">
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img16.png" ?>" alt="" />
          </figure>
        </div>
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img17.png" ?>" alt="" />
          </figure>
        </div>
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img18.png" ?>" alt="" />
          </figure>
        </div>
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img19.png" ?>" alt="" />
          </figure>
        </div>
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img20.png" ?>" alt="" />
          </figure>
        </div>
        <div class="client-item">
          <figure>
            <img src="<?= BASE_IMG . "/img/educator-img18.png" ?>" alt="" />
          </figure>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="<?= BASE_ACTIONS . "/actions_home.js" ?>"></script>