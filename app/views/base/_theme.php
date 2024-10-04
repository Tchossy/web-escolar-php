<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> <?= SITE ?> </title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link rel="icon" href="<?= BASE_IMG . "/favicon.png" ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BASE_VENDORS . "/bootstrap/css/bootstrap.min.css" ?>" media="all" />
  <!-- Fonts Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/fontawesome/css/all.min.css" ?>" />
  <!-- Elmentkit Icon CSS -->
  <link rel="stylesheet" type="text/css"
    href="<?= BASE_VENDORS . "/elementskit-icon-pack/assets/css/ekiticons.css" ?>" />
  <!-- progress bar CSS -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/progressbar-fill-visible/css/progressBar.css" ?>" />
  <!-- jquery-ui css -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/jquery-ui/jquery-ui.min.css" ?>" />
  <!-- modal video css -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/modal-video/modal-video.min.css" ?>" />
  <!-- light box css -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/fancybox/dist/jquery.fancybox.min.css" ?>" />
  <!-- slick slider css -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/slick/slick.css" ?>" />
  <link rel="stylesheet" type="text/css" href="<?= BASE_VENDORS . "/slick/slick-theme.css" ?>" />
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_STYLES . "/style.css" ?>" />

  <!-- CEO -->
  <meta property="og:site_name" content="Complexo Escolar Pensador do Futuro" />
  <meta property="og:title" content="Complexo Escolar Pensador do Futuro" />
  <meta property="og:description"
    content="O Complexo Escolar Pensador do Futuro foi fundado com a missão de oferecer uma educação técnica de excelência, capacitando jovens e adultos, preparando-os para os desafios do mercado de trabalho." />
  <meta name="author" content="https://www.tchossy.com/" />
  <meta property="og:type" content="article" />
  <meta property="article:tag" content="Complexo Escolar" />
  <meta property="article:tag" content="Pensador do Futuro" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy Solution" />
  <meta property="article:tag" content="Educação Técnica" />
  <meta property="article:tag" content="Capacitação" />
  <meta property="article:tag" content="Mercado de Trabalho" />
  <meta property="article:tag" content="Formação Profissional" />
  <meta property="article:tag" content="Educação" />
  <meta property="article:tag" content="Ensino" />
  <meta property="article:tag" content="Jovens" />
  <meta property="article:tag" content="Adultos" />
  <meta property="article:tag" content="Excelência" />

</head>

<body class="home">
  <!-- <img src="<?= BASE_IMG . "/photo1.png" ?>" alt="img" /> -->

  <!-- <ul class="header-user-links"> -->
  <!-- <li> -->
  <!-- <?php if (isset($_SESSION['customer_email'])) : ?> -->
  <!-- <a> -->
  <!-- <i class="fas fa-user"></i> -->
  <!-- <?= $_SESSION['customer_name']; ?> -->
  <!-- </a> -->
  <!-- <?php else : ?> -->
  <!-- <a href="/login"> -->
  <!-- <i class="fas fa-user"></i> -->
  <!-- Login | Registrar -->
  <!-- </a> -->
  <!-- <?php endif; ?> -->
  <!-- <a href="login.html"> <i class="fas fa-user"></i> Login or Register</a> -->
  <!-- </li> -->
  <!-- </ul> -->

  <div id="siteLoader" class="site-loader">
    <div class="preloader-content">
      <img src="<?= BASE_IMG . "/img/loader1.gif" ?>" alt="" />
    </div>
  </div>

  <div id="page" class="full-page">
    <header class="site-header site-header-transparent">
      <!-- header html start -->
      <div class="top-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 d-none d-lg-block">
              <div class="header-contact-info">
                <ul>
                  <li>
                    <a href="tel:+244-925-991-392"><i class="fas fa-phone-alt"></i> +244 925 991 392</a>
                  </li>
                  <li>
                    <a href="/cdn-cgi/l/email-protection#4e2d21233e2f20370e2a21232f2720602d2123"><i
                        class="fas fa-envelope"></i>
                      <span class="__cf_email__"
                        data-cfemail="0d6e62607d6c63744d6962606c6463236e6260">geral@escolar.com</span></a>
                  </li>
                  <li>
                    <i class="fas fa-map-marker-alt"></i> 21 De Janeiro
                    Luanda, Benfica
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
              <div class="header-social social-links">
                <ul>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com" target="_blank">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com" target="_blank">
                      <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="header-search-icon">
                <button class="search-icon">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-header" id="masthead">
        <div class="container">
          <div class="hb-group d-flex align-items-center justify-content-between">
            <div class="site-identity col-lg-3">
              <p class="site-title">
                <a href="/">
                  <img src="<?= BASE_IMG . "/img/educator-logo1.png" ?>" alt="logo" />
                </a>
              </p>
            </div>
            <div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
              <nav id="navigation" class="navigation d-none d-lg-inline-block">
                <ul>
                  <li class="current-menu-item">
                    <a href="/">Inicio</a>
                  </li>
                  <li>
                    <a href="/about">Sobre</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Ensinos</a>
                    <ul>

                      <li>
                        <a href="/ensinos-medio">Ensinos Médio</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="/blog">Noticias</a>
                  </li>
                  <li>
                    <a href="/contact">Contato</a>
                  </li>
                </ul>
              </nav>
              <div class="header-btn d-inline-block">
                <a href="/apply" class="button-round-secondary">Aplicar Agora</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu-container"></div>
    </header>

    <!-- MAIN -->
    <?= $this->section("content") ?>

    <!-- footer part -->
    <footer id="colophon" class="site-footer">
      <div class="footer-overlay"></div>
      <!-- <div class="subscribe-section">
        <div class="container">
          <div class="subscribe-content">
            <div class="overlay"></div>
            <div class="row align-items-center">
              <div class="col-lg-5">
                <h3 class="subscribe-title">Assine nossa newsletter !</h3>
                <p class="subscribe-info">
                  Elementum ex similique sollicitudin eveniet sem eveniet
                  proin, iste euismod! Quia! Fugiat molestie leo placerat.
                </p>
              </div>
              <div class="col-lg-7">
                <div class="form-content">
                  <input type="email" name="email" placeholder="Enter Email Address" />
                  <button type="submit" class="button-round-primary">
                    ASSINAR
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="top-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <aside class="widget widget_text img-textwidget">
                <div class="footer-logo">
                  <a href="/"><img src="<?= BASE_IMG . "/img/educator-logo1.png" ?>" alt="logo" /></a>
                </div>
                <div class="textwidget widget-text">
                  Vero, tempor morbi, adipiscing aliqua nonummy proident
                  perferendis? Laboris lacus quidem repellendus quasi.
                </div>
              </aside>
              <div class="footer-social-links">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/" target="_blank">
                      <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com/" target="_blank">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank">
                      <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/" target="_blank">
                      <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <aside class="widget">
                <h5 class="widget-title">LINKS rápidos</h5>
                <ul>
                  <li>
                    <a href="/about">Sobre nós</a>
                  </li>
                  <li>
                    <a href="/ensinos-medio">Ensinos Médio</a>
                  </li>
                  <li>
                    <a href="/blog">Noticias</a>
                  </li>
                  <li>
                    <a href="/contact">Contato</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6">
              <aside class="widget">
                <h5 class="widget-title">Suporte</h5>
                <ul>
                  <li>
                    <a href="/faq">Central de Ajuda</a>
                  </li>
                  <li>
                    <a href="/contact">Fale Conosco</a>
                  </li>
                  <li>
                    <a href="/enrollment">Para inscrição</a>
                  </li>
                  <li>
                    <a href="/about">Comunidade de Pais</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6">
              <aside class="widget widget_text school-time">
                <h5 class="widget-title">Horário Escolar</h5>
                <span>
                  <i aria-hidden="true" class="far fa-clock"></i>
                  8 AM - 5 PM , Segunda a Sábado
                </span>
                <p>
                  Aut, quae convallis minim cum ornare! Pede dictum convallis.
                </p>
                <a href="/contact" class="button-round-secondary">JUNTE-SE A NÓS AGORA</a>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="bottom-footer">
          <div class="row">
            <div class="col-md-6">
              <a class="copy-right" href="www.tchossy.com">
                Copyright &copy; 2024 Tchossy. All rights reserved.
              </a>
            </div>
            <div class="col-md-6">
              <div class="legal-list">
                <ul>
                  <li>
                    <a href="/legal-notice#policy">POLÍTICA DE PRIVACIDADE</a>
                  </li>
                  <li>
                    <a href="/contact">SUPORTE</a>
                  </li>
                  <li>
                    <a href="/legal-notice#terms">TERMOS E CONDIÇÕES</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- back to top -->
    <a id="backTotop" href="#" class="to-top-icon">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!-- custom search field html -->
    <div class="header-search-form">
      <div class="container">
        <div class="header-search-container">
          <form class="search-form" role="search" method="get">
            <input type="text" name="s" placeholder="Enter your text..." />
          </form>
          <a href="#" class="search-close">
            <i class="fas fa-times"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="<?= BASE_VENDORS . "/jquery/jquery.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/waypoint/jquery.waypoints.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/bootstrap/js/bootstrap.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/jquery-ui/jquery-ui.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/progressbar-fill-visible/js/progressBar.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/countdown-date-loop-counter/loopcounter.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/counterup/jquery.counterup.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/modal-video/jquery-modal-video.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/masonry/masonry.pkgd.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/fancybox/dist/jquery.fancybox.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/slick/slick.min.js"  ?>"></script>
  <script src="<?= BASE_VENDORS . "/slick-nav/jquery.slicknav.js"  ?>"></script>
  <script src="<?= BASE_JS . "/custom.js"  ?>"></script>

  <script>
    ;
    (function() {
      function c() {
        var b = a.contentDocument || a.contentWindow.document
        if (b) {
          var d = b.createElement('script')
          d.innerHTML =
            "window.__CF$cv$params={r:'8c3c13915903cc57',t:'MTcyNjQzOTU4NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"
          b.getElementsByTagName('head')[0].appendChild(d)
        }
      }
      if (document.body) {
        var a = document.createElement('iframe')
        a.height = 1
        a.width = 1
        a.style.position = 'absolute'
        a.style.top = 0
        a.style.left = 0
        a.style.border = 'none'
        a.style.visibility = 'hidden'
        document.body.appendChild(a)
        if ('loading' !== document.readyState) c()
        else if (window.addEventListener)
          document.addEventListener('DOMContentLoaded', c)
        else {
          var e = document.onreadystatechange || function() {}
          document.onreadystatechange = function(b) {
            e(b)
            'loading' !== document.readyState &&
              ((document.onreadystatechange = e), c())
          }
        }
      }
    })()
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8c3c13915903cc57","version":"2024.8.0","r":1,"token":"2aaac9563824454ba89abdea91540009","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}}}'
    crossorigin="anonymous"></script>

</body>

</html>