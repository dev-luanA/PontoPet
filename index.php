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
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
  <!-- Imagens -->
  <link rel="preload" as="image" href="fundonovoluana.png">

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
          <li class="navbar-item"><a href="#home" class="navbar-link" data-nav-link>Início</a></li>
          <li class="navbar-item"><a href="#shop" class="navbar-link" data-nav-link>Catálogo de Produtos</a></li>
          <li class="navbar-item"><a href="PerguntasFrequentes/perguntas.php" class="navbar-link" data-nav-link>FAQ</a></li>
          <li class="navbar-item"><a href="Consultas/consultas.html" class="navbar-link" data-nav-link>Consultas</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <?php
          session_start();
          if(isset($_SESSION['user_id'])) {
              // Conectar ao banco de dados
              $conn = new mysqli("localhost", "root", "", "db_petshop2");
              
              // Verificar conexão
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              
              // Obter o nome do usuário
              $user_id = $_SESSION['user_id'];
              $sql = "SELECT nome_cliente FROM cliente WHERE id_cliente = ?";
              $stmt = $conn->prepare($sql);
              if ($stmt) {
                  $stmt->bind_param("i", $user_id);
                  $stmt->execute();
                  $stmt->bind_result($nome_cliente);
                  $stmt->fetch();
                  $stmt->close();
                  echo "Olá, $nome_cliente!";
              }
              $conn->close();
              echo '<form action="logout.php" method="POST" style="display:inline;">
                        <button type="submit" class="action-btn user" aria-label="Logout">Logout</button>
                    </form>';
          } else {
              echo '<button id="searchBtn" class="action-btn" aria-label="Search">
                        <ion-icon name="person-add-sharp" aria-hidden="true"></ion-icon>
                    </button>';
              echo '<button id="userBtn" class="action-btn user" aria-label="User">
                        <ion-icon name="person" aria-hidden="true"></ion-icon>
                    </button>';
          }
        ?>

        <script>
          document.getElementById("searchBtn").addEventListener("click", function() {
            window.location.href = "Cadastro/cadastro.html";
          });
          document.getElementById("userBtn").addEventListener("click", function() {
            window.location.href = "Login/login.php";
          });
        </script>

        <a href="Loja/loja.php" class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
          <span class="btn-badge">0</span>
        </a>

      </div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('fundonovoluana.png')">
        <div class="container">
          <a href="Loja/loja.html" class="btn">Compre agora!</a>
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
            <a href="Gatos/gatos.php">
              <img src="./assets/images/category-1.jpg" width="330" height="300" loading="lazy" alt="Cat Food" class="img-cover">
            </a>
          </figure>
          <h3 class="h3">
            <a href="Gatos/gatos.php" class="card-title">Gatos</a>
          </h3>
        </div>
      </li>

      <li class="scrollbar-item">
        <div class="category-card">
          <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
            <a href="Cachorros/cachorros.php">
              <img src="./assets/images/category-2.jpg" width="330" height="300" loading="lazy" alt="Cat Toys" class="img-cover">
            </a>
          </figure>
          <h3 class="h3">
            <a href="Cachorros/cachorros.php" class="card-title">Cachorros</a>
          </h3>
        </div>
      </li>

      <li class="scrollbar-item">
        <div class="category-card">
          <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
            <a href="Passaros/passaros.php">
              <img src="./assets/images/category-3.jpg" width="330" height="300" loading="lazy" alt="Dog Food" class="img-cover">
            </a>
          </figure>
          <h3 class="h3">
            <a href="Passaros/passaros.php" class="card-title">Passáros</a>
          </h3>
        </div>
      </li>

      <li class="scrollbar-item">
        <div class="category-card">
          <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
            <a href="Aquáticos/aquaticos.php">
              <img src="./assets/images/category-4.jpg" width="330" height="300" loading="lazy" alt="Dog Toys" class="img-cover">
            </a>
          </figure>
          <h3 class="h3">
            <a href="Aquáticos/aquaticos.php" class="card-title">Aquáticos</a>
          </h3>
        </div>
      </li>

      <li class="scrollbar-item">
        <div class="category-card">
          <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
            <a href="Roedores/roedores.php">
              <img src="./assets/images/category-5.jpg" width="330" height="300" loading="lazy" alt="Dog Sumpplements" class="img-cover">
            </a>
          </figure>
          <h3 class="h3">
            <a href="Roedores/roedores.php" class="card-title">Roedores</a>
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
                  Farmácia <span class="span"></span>
                </h3>

                <a href="Farmacia\farmacia.php" class="btn">Leia mais</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('tartaruga.png'); --width: 540; --height: 374;">

                <p class="card-subtitle">Procure pelos melhores </p>

                <h3 class="h3 card-title">
                  Profissionais <span class="span"></span>
                </h3>
                <a href="Profissionais\profissionais.php" class="btn">Aqui</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('pass.png'); --width: 540; --height: 374;">

                <p class="card-subtitle">Encontre os melhores</p>

                <h3 class="h3 card-title">
                  Preços <span class="span"></span>
                </h3>

                <a href="Melhoresprecos\inserir.php" class="btn">Leia mais</a>

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
            <span class="span">Promoção</span> Semanal
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/premier.png" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover default">
                  <img src="./assets/images/premier2.png" width="360" height="360" loading="lazy"
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
                    <a href="#" class="card-title">Ração Premier para raças pequenas - Filhotes até 12 meses /
                      2,5kg Sabor frango e salmão
                    </a>
                  </h3>

                  <data class="card-price" value="15">R$89,90</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/remedio.png" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover default">
                  <img src="./assets/images/provex.png" width="360" height="360" loading="lazy"
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
                    <a href="#" class="card-title">Vermifugo para cães</a>
                  </h3>

                  <data class="card-price" value="45">R$07,90</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/peixe.png" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/peixe2.png" width="360" height="360" loading="lazy"
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
                    <a href="#" class="card-title">Anticloro Nutricon para aquários - 15ml</a>
                  </h3>

                  <data class="card-price" value="45">R$16,90</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/hamsterbolaacrilico.png" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/hamsterbolaacrilico2.png" width="360" height="360" loading="lazy"
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
                    <a href="#" class="card-title">Brinquedo Bola de Acrílico para Hamsters</a>
                  </h3>

                  <data class="card-price" value="49">R$16,00</data>

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
                 Suporte para tirar dúvidas e comentar sobre algum erro de utilização
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

            <h2 class="h2 section-title">Você sabia?</h2>

            <p class="section-text">
              Segundo pesquisas, 86% dos brasileiros com acesso à internet utilizam a rede para buscar orientações sobre saúde, remédios e suas condições médicas.
            </p>

            <a href="#" class="btn">Abra para saber mais</a>

          </div>

        </div>
      </section>





      <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Converse com</span> Profissionais
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/lu.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/lu.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/lu.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/lu.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/lu.jpg" width="150" height="150" loading="lazy" alt="brand logo"
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

          <a href="#" class="logo">PontoPet</a>

          <p class="footer-text">
            Dúvidas? Por favor entre em contato <a href="petponto@gmail.com"
              class="link">pontopet@gmail.com</a>
          </p>

          <ul class="contact-list">

           
            
            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="xx xxxxx-xxxx" class="contact-link">(12)xxxxx-xxxx</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/?locale=pt_BR" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://x.com/?lang=pt-br" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://br.pinterest.com/" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Acesse aqui</p>
          </li>

          <li>
            <a href="Sobre\sobre.php" class="footer-link">Sobre nós</a>
          </li>

          <li>
            <a href="Reclame\reclame.php" class="footer-link">Página de reclamações</a>
          </li>

          <li>
            <a href="PerguntasFrequentes\perguntas.php" class="footer-link">Perguntas Frequentes</a>
          </li>

          <li>
            <a href="Fornecedores\fornecedores.php" class="footer-link">Fornecedores</a>
          </li>

        </ul>

        <ul class="footer-list">

        <li>
            <p class="footer-list-title">Termos e Diretrizes</p> 
          </li>
          <li>
            <a href="#" class="footer-link">Termos e Diretrizes</a> <!--- criar ainda -->
          </li> 
          <li>
            <a href="#" class="footer-link">Políticas de Privacidade, Envios e Reembolsos</a> <!--- criar ainda -->
          </li>
          <li>
            <a href="#" class="footer-link">Utilize o nosso APP </a> <!--- ainda não temos o link do app-->
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 alunos de desenvolvimento 
        </p>

        <img src="./assets/images/metodosdepagamento.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>

  </footer>


  <!-- 
    - botão de voltar para o início da página
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>


  <!-- 
    - js personalizado
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - biblioteca ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>