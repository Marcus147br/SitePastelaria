<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pastelaria do Tonhão</title>

  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

  <!-- Header -->
<header class="header">
  <div class="logo">
    <img src="imagens/logo.png" alt="Logo Pastelaria do Tonhão">
  </div>
  <!-- Novo botão para "Sobre Nós" -->
  <nav class="menu">
    <a href="sobre-nos.html" class="btn-sobre-nos">Sobre Nós</a>
  </nav>
</header>


  <!-- Destaque Pastel Especial -->
<section class="destaque-especial">
  <div class="conteudo">
    <h2>Pastel Especial</h2>
    <p>Um pastel mais que especial! Uma junção de carne, mussarela, presunto e frango sensacional!</p>
    <!-- Link do iFood -->
    <a href="https://www.ifood.com.br" class="btn-pedir" target="_blank">Peça já!</a>
  </div>
  <div class="imagem"></div>
</section>


  <!-- Seção: Pastel Tradicional -->
  <section class="pastel-tradicional">
    <h2>Pastel Tradicional</h2>
    <div class="cardapio-grid">
      <!-- Produtos de Pastéis serão renderizados aqui via JavaScript -->
    </div>
  </section>

  <!-- Seção: Bebidas -->
  <section class="bebidas">
    <h2>Bebidas</h2>
    <div class="cardapio-grid">
    </div>
  </section>
  <!-- Seção: Por que escolher a Pastelaria do Tonhão -->
  <section class="porque-escolher">
    <h2>Por que escolher a Pastelaria do Tonhão?</h2>
    <div class="vantagens">
      <div class="vantagem">
        <img src="imagens/feito-na-hora.png" alt="Feito na Hora">
        <h3>Feito na Hora</h3>
        <p>Aqui no Tonhão todos os produtos são feitos por nós. Não usamos conservantes. É só pedir que seu pastel será feito na hora!</p>
      </div>

      <div class="vantagem">
        <img src="imagens/preço-justo.png" alt="Preço Justo">
        <h3>Preço Justo</h3>
        <p>A Pastelaria do Tonhão é para todos os bolsos. Estamos localizados próximo ao centro de Varginha e por aqui passam todos os tipos de clientes.</p>
      </div>

      <div class="vantagem">
        <img src="imagens/reconhecimento.png" alt="Reconhecimento">
        <h3>Reconhecimento</h3>
        <p>São mais de 56 anos de história. Milhares de avaliações positivas e clientes satisfeitos nestas 5 décadas de atendimento!</p>
      </div>
    </div>
  </section>
<!-- Seção: Receba Seu Pastel em Casa -->
<section class="receba-pastel">
  <div class="conteudo">
    <h2>Receba Seu Pastel em Casa!</h2>
    <p>É isto mesmo! Basta pedir pelo nosso iFood ou WhatsApp e você receberá seu pastel onde você estiver!</p>
    <div class="botoes">
      <!-- Botão iFood -->
      <a href="https://www.ifood.com.br" target="_blank" class="btn-ifood">
        <img src="imagens/ifood.png" alt="Peça pelo iFood">
      </a>
      <!-- Botão WhatsApp -->
      <a href="https://wa.me/5535984715000" target="_blank" class="btn-whatsapp">
        <img src="imagens/wpp.png" alt="Peça pelo WhatsApp">
      </a>
    </div>
  </div>
  <!-- Imagem do Pastel -->
  <div class="imagem">
    <img src="imagens/pastel.png" alt="Pastel">
  </div>
</section>

  <!-- Rodapé -->
  <footer class="rodape">
    <div class="container-rodape">
      <!-- Logo -->
      <div class="logo-rodape">
        <img src="imagens/logo.png" alt="Logo Pastelaria do Tonhão">
      </div>

      <!-- Contato -->
      <div class="contato">
        <h3>Contato</h3>
        <p><img src="imagens/ifood.png" class="icon" alt="iFood"> iFood</p>
        <p><img src="imagens/tel.png" class="icon" alt="Telefone"> (35) 9 9988-1231</p>
        <p><img src="imagens/wpp.png" class="icon" alt="WhatsApp"> (35) 9 8471-5000</p>
      </div>

      <!-- Redes -->
      <div class="redes">
        <h3>Redes</h3>
        <p><img src="imagens/instagram.png" class="icon" alt="Instagram"> Instagram</p>
      </div>

      <!-- Localização -->
      <div class="localizacao">
        <h3>Localização</h3>
        <img src="imagens/loc.png" alt="Mapa localização">
        <p>Praça São Charbel, 71 - Jardim Andere, Varginha - MG, 37006-510</p>
      </div>
    </div>
  </footer>

 <!-- Botão Flutuante do WhatsApp -->
<a href="https://wa.me/5535984715000" id="whatsapp-button" class="whatsapp-float" target="_blank">
  <img src="imagens/wpp.png" alt="Fale conosco no WhatsApp">
</a>

  
  <!-- Botão de Acessibilidade -->
  <a id="acessibilidade-button" href="#" onclick="ativarModoAcessibilidade()" style="position: fixed; bottom: 90px; right: 20px; z-index: 1000;">
    <img src="imagens/acessibilidade.png" alt="Acessibilidade" style="width: 50px; height: 50px;">
  </a>

  <script src="pasteltonhao.js"></script>
  <script>
    PastelTonhao.init();
    PastelTonhao.renderCardapio([
      { imagem: 'imagens/pastelcarne.png', nome: 'Pastel Carne', descricao: 'Carne temperada', preco: '8,00' },
      { imagem: 'imagens/pastelqueijo.png', nome: 'Pastel Queijo', descricao: 'Queijo mussarela', preco: '8,00' },
      { imagem: 'imagens/pastelfrango.png', nome: 'Pastel Frango', descricao: 'Frango temperado c/ mussarela', preco: '8,00' },
      { imagem: 'imagens/pastelcalabresa.png', nome: 'Pastel Calabresa', descricao: 'Calabresa e mussarela', preco: '8,00' },
      { imagem: 'imagens/pastelpalmito.png', nome: 'Pastel Palmito', descricao: 'Palmito temperado', preco: '8,00' },
      { imagem: 'imagens/pastelmisto.png', nome: 'Pastel Misto', descricao: 'Carne temperada e mussarela', preco: '10,00' }
    ], '.pastel-tradicional .cardapio-grid');

    // Renderizando bebidas
    PastelTonhao.renderCardapio([
      { imagem: 'imagens/suco-dellvalle.png', nome: 'Suco Dell Valle Lata (250ml)', descricao: 'Laranja / Limão', preco: 'R$ 3,00' },
      { imagem: 'imagens/bioleve.png', nome: 'Suco Bielevel PET (250ml)', descricao: 'Frutas Cítricas / Laranja com Acerola / Abacaxi com Hortelã', preco: 'R$ 5,00' },
      { imagem: 'imagens/sodinha.png', nome: 'Sodinha           (180ml)', descricao: 'Abacaxi', preco: 'R$ 2,00' },
      { imagem: 'imagens/refrigerante-lata.png', nome: 'Refrigerante Lata (350ml)', descricao: 'Coca-Cola / Fanta Laranja / Sprite', preco: 'R$ 5,00' },
      { imagem: 'imagens/refrigerante-600ml.png', nome: 'Refrigerante  (600ml)', descricao: 'Coca-Cola ', preco: 'R$ 8,00' },
      { imagem: 'imagens/refrigerante-pet-1l.png', nome: 'Refrigerante  (1L)', descricao: 'Coca-Cola ', preco: 'R$ 8,00' },
      { imagem: 'imagens/refri-2l.png', nome: 'Refrigerante PET (2L)', descricao: 'Coca-Cola / Kuá', preco: 'R$ 14,00' },
      { imagem: 'imagens/agua-semgas.png', nome: 'Água (500ml)', descricao: 'Sem Gás', preco: 'R$ 2,50' }
    ], '.bebidas .cardapio-grid');
  </script>

</body>
</html>
