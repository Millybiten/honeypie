<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Honey Pie</title>
  <link rel="stylesheet" href="css/reset.css">
  <!--<link rel="stylesheet" href="css/index.css">-->
  <link rel="stylesheet/less" href="less/index.less">
  <!--Fonte-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="container">
    <img src="img/logo.png" alt="Logo da Mirror Fashion">
    <p class="sacola">
      Nenhum item na sacola de compras
    </p>
    <nav class="menu-opcoes">
      <ul>
        <li><a href="#">Sua Conta</a></li>
        <li><a href="#">Lista de Desejos</a></li>
        <li><a href="#">Cartão Fidelidade</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
      </ul>
    </nav>
  </header>
  <div class="container destaque">
    <section class="busca">
      <h2>Busca</h2>
      <form>
        <input type="search">
        <button>Buscar</button>
      </form>
    </section>
    <!-- fim .busca -->
    <section class="menu-departamentos">
      <h2>Departamentos</h2>
      <nav>
        <ul>

          <li>
            <a href="#">Tortas Doces</a>
            <ul>
              <li><a href="#">Sabores clássicos de frutas</a></li>
              <li><a href="#">Tortas cremosas</a></li>
              <li><a href="#">Tortas geladas</a></li>
              <li><a href="#">Receitas caseiras</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Tortas Especiais e Gourmet</a>
            <ul>
              <li><a href="#">Combinações sofisticadas</a></li>
              <li><a href="#">Tortas trufadas e recheadas</a></li>
              <li><a href="#">Edições limitadas e sazonais</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Tortas Diet, Sem Açúcar, Low-Carb ou Funcionais</a>
            <ul>
              <li><a href="#">Opções sem adição de açúcar</a></li>
              <li><a href="#">Tortas leves e nutritivas</a></li>
              <li><a href="#">Versões com farinhas especiais</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Tortas Veganas, Sem Glúten ou Sem Lactose</a>
            <ul>
              <li><a href="#">Alternativas vegetais</a></li>
              <li><a href="#">Opções para intolerâncias alimentares</a></li>
              <li><a href="#">Sabores inclusivos para diferentes dietas</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Mini Tortas, Fatias e Porções Individuais</a>
            <ul>
              <li><a href="#">Tortas em pedaços</a></li>
              <li><a href="#">Versões em tamanho reduzido</a></li>
              <li><a href="#">Porções práticas para consumo imediato</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Cestas e Kits de Sobremesas</a>
            <ul>
              <li><a href="#">Combinações de tortas variadas</a></li>
              <li><a href="#">Kits temáticos para presentes</a></li>
              <li><a href="#">Opções personalizáveis para datas especiais</a></li>
            </ul>
          </li>
          <br>
          <li>
            <a href="#">Doces Complementares e Confeitaria Paralela</a>
            <ul>
              <li><a href="#">Docinhos artesanais</a></li>
              <li><a href="#">Sobremesas diversas além de tortas</a></li>
              <li><a href="#">Itens de confeitaria para acompanhar</a></li>
            </ul>
          </li>
          <br>
        </ul>
      </nav>
    </section>
    <!-- fim .menu-departamentos -->
    <section class="banner-destaque">
      <figure>
        <img src="img/Amostra.jpg" alt="Promoção">
      </figure>
      <a href="#" class="pause"></a>
    </section>
    <!-- fim .banner-destaque -->
  </div>
  <!-- fim .container .destaque -->
  <div class="container paineis">
    <section class="painel novidades">
      <h2>Novidades</h2>
      <ol>
        <!-- primeiro produto -->
        <li>
          <a href="Produtos/Torta Cremosa de Paçoca com Ganache de Chocolate.html">
            <figure>
              <img src="img/produtos/Mídia (17).jpg" alt="miniatura1">
              <figcaption>Torta de paçoca com cobertura de chocolate R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do primeiro produto -->
        <!-- segundo produto -->
        <li>
          <a href="Produtos/Torta Delícia de Figo com Creme Suave.html">
            <figure>
              <img src="img/produtos/Mídia (2).jpg" alt="miniatura1">
              <figcaption>Torta de figo R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do segundo produto -->
        <!-- terceiro produto -->
        <li>
          <a href="Produtos/Torta Silvestre de Framboesa e Amora.html">
            <figure>
              <img src="img/produtos/Mídia (3).jpg" alt="miniatura1">
              <figcaption>Torta de framboesa e amora R$ 130</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do terceiro produto -->
        <!-- quarto produto -->
        <li>
          <a href="Produtos/Torta Caseira de Banana com Canela.html">
            <figure>
              <img src="img/produtos/Mídia (4).jpg" alt="miniatura1">
              <figcaption>Torta de banana R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do quarto produto -->
        <!-- quinto produto -->
        <li>
          <a href="Produtos/Torta Clássica de Morango com Creme.html">
            <figure>
              <img src="img/produtos/Mídia (5).jpg" alt="miniatura1">
              <figcaption>Torta de morango R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do quinto produto -->
        <!-- sexto produto -->
        <li>
          <a href="Produtos/Torta Floresta Negra Tradicional.html">
            <figure>
              <img src="img/produtos/Mídia (6).jpg" alt="miniatura1">
              <figcaption>Torta floresta negra R$ 105</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do sexto produto -->
        <!-- setimo produto! -->
        <li>
          <a href="Produtos/Torta Cremosa de Oreo com Chocolate.html">
            <figure>
              <img src="img/produtos/Mídia (7).jpg" alt="miniatura1">
              <figcaption>Torta de oreo R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do setimo produto -->
        <!-- oitavo produto -->
        <li>
          <a href="Produtos/Torta Especial de Raspas de Chocolate.html">
            <figure>
              <img src="img/produtos/Mídia (8).jpg" alt="miniatura1">
              <figcaption>Torta de chocolate R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do oitavo produto -->
        <!-- nono produto -->
        <li>
          <a href="Produtos/Torta de Caramelo com Chocolate Premium.html">
            <figure>
              <img src="img/produtos/Mídia (10).jpg" alt="miniatura1">
              <figcaption>Torta de caramelo com chocolate R$ 105</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do nono produto -->
        <!-- decimo produto -->
        <li>
          <a href="Produtos/Torta Mousse de Maracujá.html">
            <figure>
              <img src="img/produtos/Mídia (12).jpg" alt="miniatura1">
              <figcaption>Torta mouse de maracuja R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo produto -->
        <!-- decimo primeiro produto -->
        <li>
          <a href="Produtos/Mini Torta de Mirtilo com chantilly.html">
            <figure>
              <img src="img/produtos/Mídia (13).jpg" alt="miniatura1">
              <figcaption>Mini torta de mirtilo com cream chese R$ 18</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo primeiro produto -->
        <!-- decimo segundo produto -->
        <li>
          <a href="Produtos/Torta Salgada de Frango com Catupiry.html">
            <figure>
              <img src="img/produtos/Mídia (16).jpg" alt="miniatura1">
              <figcaption>Torta de fango com catupiri R$ 30</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo segundo produto -->
        <button type="button">Mostrar mais</button>
      </ol>
    </section>
    <!--Mais Vendidos-->
    <section class="painel mais-vendidos">
      <h2>Mais Vendidos</h2>
      <ol>
        <!-- primeiro produto -->
        <li>
          <a href="produto1.html">
            <figure>
              <img src="img/produtos/Mídia (9).jpg" alt="miniatura1">
              <figcaption>Mini torta de oreo R$ 18</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do primeiro produto -->
        <!-- segundo produto -->
        <li>
          <a href="produto2.html">
            <figure>
              <img src="img/produtos/Mídia (18).jpg" alt="miniatura1">
              <figcaption>Torta de limão R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do segundo produto -->
        <!-- terceiro produto -->
        <li>
          <a href="produto3.html">
            <figure>
              <img src="img/produtos/Mídia (19).jpg" alt="miniatura1">
              <figcaption>Mini torta de kiui R$ 15</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do terceiro produto -->
        <!-- quarto produto -->
        <li>
          <a href="produto4.html">
            <figure>
              <img src="img/produtos/Mídia (20).jpg" alt="miniatura1">
              <figcaption>Torta de cereja com geleia de morango R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do quarto produto -->
        <!-- quinto produto -->
        <li>
          <a href="produto5.html">
            <figure>
              <img src="img/produtos/Mídia (21).jpg" alt="miniatura1">
              <figcaption>Mini torta de morango R$ 15</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do quinto produto -->
        <!-- sexto produto -->
        <li>
          <a href="produto6.html">
            <figure>
              <img src="img/produtos/Mídia (22).jpg" alt="miniatura1">
              <figcaption>Mini torta de queijo minas R$ 15</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do sexto produto -->
        <!-- setimo produto! -->
        <li>
          <a href="produto7.html">
            <figure>
              <img src="img/produtos/Mídia (23).jpg" alt="miniatura1">
              <figcaption>Torta de laranja R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do setimo produto -->
        <!-- oitavo produto -->
        <li>
          <a href="produto8.html">
            <figure>
              <img src="img/produtos/Mídia (24).jpg" alt="miniatura1">
              <figcaption>Torta de espinafre com queijo R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do oitavo produto -->
        <!-- nono produto -->
        <li>
          <a href="produto9.html">
            <figure>
              <img src="img/produtos/Mídia (25).jpg" alt="miniatura1">
              <figcaption>Torta de amora R$ 85</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do nono produto -->
        <!-- decimo produto -->
        <li>
          <a href="produto10.html">
            <figure>
              <img src="img/produtos/Mídia (26).jpg" alt="miniatura1">
              <figcaption>Mini torta de laranja com leite condençado R$ 15</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo produto -->
        <!-- decimo primeiro produto -->
        <li>
          <a href="produto11.html">
            <figure>
              <img src="img/produtos/Mídia.jpg" alt="miniatura1">
              <figcaption>Mini torta de banana R$15</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo primeiro produto -->
        <!-- decimo segundo produto -->
        <li>
          <a href="produto12.html">
            <figure>
              <img src="img/produtos/Mídia (1).jpg" alt="miniatura1">
              <figcaption>Torta de morango com cobertura de chocolate R$ 105</figcaption>
            </figure>
          </a>
        </li>
        <!-- fim do decimo segundo produto -->
        <button type="button">Mostrar mais</button>
      </ol>
    </section>
  </div>
  <!--fim do conteiner .paineis-->
  <footer>
    <div class="container">
      <img src="img/logo-rodape.png" alt="Logo da honey Pie">
      <ul class="social">
        <li><a href="https://www.tiktok.com/@honeypieofc2108"></a></li>
        <li><a href="https://x.com/HoneyPie_ofc"></a></li>
        <li><a href="https://www.instagram.com/honeypie_ofc/"></a></li>
      </ul>
    </div>
  </footer>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript" src="js/banner.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/4.2.0/less.min.js"></script>
</body>

</html>