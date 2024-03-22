<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>PontoPet</title>
  <meta name="title" content="PontoPet">
  <link rel="shortcut icon" href="petfundo.png" type="image">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!--Links de fontes da internet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <!-- Imagens -->
  <link rel="preload" as="image" href="petfundo.png">

</head>

<body id="top">

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo">PontoPet</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Início</a>
          </li>

          <li class="navbar-item">
            <a href="#shop" class="navbar-link" data-nav-link>Loja</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Consultas</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Chat</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Contato</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('petfundo.png')"> <!--Fundo da Home-->
        <div class="container">

          <a href="#" class="btn">Compre agora!</a>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Categorias</span> Animais
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/category-1.jpg" width="330" height="300" loading="lazy" alt="Cat Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Gatos</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/category-2.jpg" width="330" height="300" loading="lazy" alt="Cat Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Cachorros</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/category-3.jpg" width="330" height="300" loading="lazy" alt="Dog Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Passáros</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/category-4.jpg" width="330" height="300" loading="lazy" alt="Dog Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Aquáticos</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/category-5.jpg" width="330" height="300" loading="lazy"
                    alt="Dog Sumpplements" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Roedores</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offer" aria-label="offer">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('cachorro.png'); --width: 540; --height: 374;">

                <p class="card-subtitle">Selecione itens de</p>

                <h3 class="h3 card-title">
                  Cura <span class="span">ou Tratamento</span>
                </h3>

                <a href="#" class="btn">Leia mais</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('tartaruga.png'); --width: 540; --height: 374;">

                <p class="card-subtitle">Procure pelos melhores </p>

                <h3 class="h3 card-title">
                  Alimentos <span class="span"> e agrados</span>
                </h3>

                <a href="#" class="btn">Leia Mais</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('pass.png'); --width: 540; --height: 374;">

                <p class="card-subtitle">Encontre os brinquedos</p>

                <h3 class="h3 card-title">
                  Mais <span class="span"> cativantes</span>
                </h3>

                <a href="#" class="btn">Leia mais</a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product" id="shop" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Mais</span> Vendidos
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-1.jpg" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover default">
                  <img src="./assets/images/product-1_0.jpg" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="false"></ion-icon>
                    </div>

                    <span class="span">(1)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ração Filhote Premium - Arroz e Frango</a>
                  </h3>

                  <data class="card-price" value="15">R$45,00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-2.jpg" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover default">
                  <img src="./assets/images/product-2_0.jpg" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Purus consequat congue sit</a>
                  </h3>

                  <data class="card-price" value="45">$45.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-3.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-3_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                  </h3>

                  <data class="card-price" value="45">$45.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-4.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-4_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                  </h3>

                  <data class="card-price" value="49">$49.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-5.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-5_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                  </h3>

                  <data class="card-price" value="85">$85.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-6.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover default">
                  <img src="./assets/images/product-6_0.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Nam justo libero porta ege</a>
                  </h3>

                  <data class="card-price" value="85">$85.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-7.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover default">
                  <img src="./assets/images/product-7_0.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Nam justo libero porta ege</a>
                  </h3>

                  <data class="card-price" value="85">$85.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-8.jpg" width="360" height="360" loading="lazy"
                    alt="Etiam commodo leo sed" class="img-cover default">
                  <img src="./assets/images/product-8_0.jpg" width="360" height="360" loading="lazy"
                    alt="Etiam commodo leo sed" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Etiam commodo leo sed</a>
                  </h3>

                  <data class="card-price" value="55">$55.00</data>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service">
        <div class="container">

          <img src="pata.png" width="300" height="300" loading="lazy" alt="" class="img">

          <h2 class="h2 section-title">
            <span class="span">O que o seu animal de estimação precisa,</span> quando precisar.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Delivery amazon</h3>

                <p class="card-text">
                  Seu produto pode ser enviado em até dois dias úteis após você fazer o pedido.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-2.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Solicitação de devolução</h3>

                <p class="card-text">
                  Basta indicar quais produtos estão sendo devolvidos e o motivo da devolução.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-3.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Confiabilidade</h3>

                <p class="card-text">
                 Caso não receba algum item adquirido em nosso site, contate-nos.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-4.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Suporte</h3>

                <p class="card-text">
                 Compras online bla
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta has-bg-image" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="900" height="660" loading="lazy" alt="cat" class="w-100">
          </figure>

          <div class="cta-content">

            <img src="./assets/images/cta-icon.png" width="120" height="35" loading="lazy" alt="taste guarantee"
              class="img">

            <h2 class="h2 section-title">Taste it, love it or we’ll replace it… Guaranteed!</h2>

            <p class="section-text">
              At Petio, we believe your dog and cat will love their food so much that if they don’t … we’ll help you
              find a
              replacement. That’s our taste guarantee.
            </p>

            <a href="#" class="btn">Find out more</a>

          </div>

        </div>
      </section>





      <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Popular</span> Brands
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-1.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-2.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-3.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-4.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-5.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Kitter</a>

          <p class="footer-text">
            Caso tiver dúvidas, por favor entre em contato <a href="petponto@gmail.com"
              class="link">petponto@gmail.com</a>
          </p>

          <ul class="contact-list">

           
            
            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="xx xxxxx-xxxx" class="contact-link">(12)xxxxx-xxxx</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">PET Ponto</p>
          </li>

          <li>
            <a href="#" class="footer-link">Sobre nós</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contato</a>
          </li>

          <li>
            <a href="#" class="footer-link">Perguntas Frequentes</a>
          </li>

          <li>
            <a href="#" class="footer-link">Fornecedores</a>
          </li>

          <li>
            <a href="#" class="footer-link">Afiliados</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Informações</p>
          </li>

          <li>
            <a href="#" class="footer-link">Política de Privacidade</a>
          </li>

          <li>
            <a href="#" class="footer-link">Política de Reembolso</a>
          </li>

          <li>
            <a href="#" class="footer-link">Política de Envio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Termos de uso</a>
          </li>

          <li>
            <a href="#" class="footer-link">Acompanhar Pedido</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Serviços</p>
          </li>

          <li>
            <a href="#" class="footer-link">Serviços Veterinários</a>
          </li>

          <li>
            <a href="#" class="footer-link">Trate Doenças</a>
          </li>

          <li>
            <a href="#" class="footer-link">Centro de Pesquisas</a>
          </li>

          <li>
            <a href="#" class="footer-link">App</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 alunos de desenvolvimento <a href="#" class="copyright-link"> PET Ponto </a>
        </p>

        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>