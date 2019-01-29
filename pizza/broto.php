<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cinema ProPh</title>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style type="text/css">
    .hr{
      width: 50%
    }
    
  </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>




<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #FF6347">
  <a class="navbar-brand" href="#">Cinema ProPh</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filmes em Cartaz
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Doces</a>
          <a class="dropdown-item" href="#">Mousse de Morango</a>
          <a class="dropdown-item" href="#">Banana com Canela</a>
          <a class="dropdown-item" href="#">Chocolate com M&M</a>
          <a class="dropdown-item" href="#">Romeu e Julieta</a>
          <a class="dropdown-item" href="#">Chocolate e brigadeiro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Salgados</a>
          <a class="dropdown-item" href="#">Calabresa</a>
          <a class="dropdown-item" href="#">Lombo Canadense</a>
          <a class="dropdown-item" href="#">Frango Catupiry</a>
          <a class="dropdown-item" href="#">Portuguesa</a>
          <a class="dropdown-item" href="#">Four Cheese</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nossos lanches
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Doces</a>
          <a class="dropdown-item" href="#">Mousse de Morango</a>
          <a class="dropdown-item" href="#">Banana com Canela</a>
          <a class="dropdown-item" href="#">Chocolate com M&M</a>
          <a class="dropdown-item" href="#">Romeu e Julieta</a>
          <a class="dropdown-item" href="#">Chocolate e brigadeiro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Salgados</a>
          <a class="dropdown-item" href="#">Calabresa</a>
          <a class="dropdown-item" href="#">Lombo Canadense</a>
          <a class="dropdown-item" href="#">Frango Catupiry</a>
          <a class="dropdown-item" href="#">Portuguesa</a>
          <a class="dropdown-item" href="#">Four Cheese</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Procure</button>
    </form>
  </div>
</nav>

	
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="cinema.jpg" width="1150" height="500" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="cinema2.jpg" width="1150" height="500" class="d-block w-100">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
  <hr class="hr">
  <center><h4>Saiba quais os preços de Nossas Pipocas</h4></center>
  <hr class="hr">
  Sabores doce: <br>
  <select>
  <option>--Selecione</option>
  <option>Grande-20 reais</option>
  <option>Médio-15 reais</option>
  <option>Pequeno-10 reais</option>
  <option>Broto-5 reais</option>
  </select>
  <br><br>
  
  Sabores salgado:<br>
  <select>
  <option>--Selecione</option>
  <option>Grande-25 reais</option>
  <option>Médio-20 reais</option>
  <option>Pequeno-15 reais</option>
  <option>Broto-10 reais</option>
  </select>
  <br><br>
  <hr class="w-75">
  <center><h4>Filmes em Cartaz</h4></center>
  <hr class="w-75">
  
  <h2>Capitã Marvel</h2>
  
    <p>
    A história acompanha Carol Danvers conforme ela se torna uma das heroínas mais poderosas do universo no momento em que a Terra se vê no meio de uma batalha galática entre duas raças alienígenas.
 Ambientado nos anos 1990, 
Capitã Marvel é uma aventura completamente
 nova de um período nunca visitado da história do Universo Cinematográfico da Marvel.
    </p>
    <center><img src="capita.jpg"></center>
  
 
  
  <br>
  <a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

   <h2>john wick</h2>
  
  <p>
 
Após quebrar uma regra bastante importante do mundo dos assassinos, Jhon agora tem um preço em sua cabeça
e ele tera que lutar por sua vida contra tudo e contra todos junto com seu cachorro, a ação está mais perto do que nunca 
com o Jhon Ricky
  </p>
  <center><img src="john.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>
<h2>Vidro</h2>
  
  <p>
  Após a conclusão de Fragmentado, Kevin Crumb, o homem com 23 personalidades diferentes, passa a ser perseguido por David Dunn,
 o herói de Corpo Fechado. O jogo de gato e rato entre o homem inquebrável e a Fera é influenciado pela presença de Elijah Price,
 que manipula os encontros entre eles e mantém segredos sobre os dois.
  </p>
  <center><img src="vidro.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>
 Zumbilandia 2</h2>
  
  <p>
  A trama vai girar em torno do quarteto original de personagens. Na narrativa,
 os sobreviventes se encontram em um mundo onde o apocalipse zumbi conseguiu evoluir.
 Neste contexto, a população zumbi já não causa tanto temor e existe um consenso geral de apatia tomando a história de cada um dos personagens.
 Wichita (Emma Stone) e Little Rock (Abigail Breslin) decidem fugir com um novo personagem (ainda sem nome), 
levando a uma missão de resgate em larga escala. De volta à estrada, os personagens acabam descobrindo uma nova raça de "super zumbis",
 que são maiores, mais fortes e mais resistentes que os demais.

  </p>
  <center><img src="zumbilandia.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>x-men fenix negra</h2>
  
  <p>
  Jean Grey começa a desenvolver incríveis poderes que a corrompem e a transformam em uma Fênix Negra. Agora,
os X-Men precisam decidir se a vida de um membro da equipe vale mais do que todas as pessoas do mundo.

  </p>
  <center><img src="xman.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>star wars IX</h2>
  
  <p>
  Após anos da batalha de Crait, a Primeira Ordem, agora sobre o poder absoluto de seu líder supremo Kylo
Ren, vem aumentando seu poder bélico e espalhandoterror pela galáxia, 
mas somente uma coisa pode atrapalhar seus planos:A resistência.
 Nesse último capítulo da saga skywalker, veremos o destino de Rey, a última Jedi e de Kylo Ren.
 A Vítoria de um deles pode significar muito para a galáxia
  </p>
  <center><img src="star.jpeg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>Shazam</h2>
  
  <p>
  Todos nós temos um super herói interior, só precisamos de um pouco de mágica para revelá-lo. Billy Batson (Asher Angel),
 um menino órfão de 14 anos, só precisa gritar a palavra SHAZAM! para se transformar no herói adulto Shazam (Zachary Levi),
 cortesia de um antigo feiticeiro (Djimon Hounsou). Ainda uma criança em seu coração, mas preso no corpo sarado do herói, 
Billy faz o que todo adolescente faria com superpoderes: se diverte! Será que ele pode voar? Será que ele tem visão raio-X? 
Será que ele pode atirar raios com suas mãos? Será que ele pode matar sua prova de estudos sociais?
 Shazam testa o limite de suas habilidades com a irresponsabilidade típica das crianças.
 Mas ele vai precisar dominar seus poderes rapidamente, para poder lutar contra as forças do mal controladas pelo Dr. Thaddeus Silvana.
  </p>
  <center><img src="shazam.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>x-men novos mutantes</h2>
  
  <p>
  Cinco jovens mutantes acabam de descobrir suas habilidades. Presos contra sua vontade em um local de segurança máxima,
eles precisa lutar para escapar do inimigo e de seus pecados do passado. Esta é a história dos Novos Mutantes, 
uma equipe formada pelos primeiros graduados da escola de Charles Xavier.
  </p>
  <center><img src="xmennovos.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>Joker</h2>
  
  <p>
  História de origem do vilão mais conhecido e insano já enfrentado pelo Batman:
 o lendário Coringa (Joaquin Phoenix). A sinopse oficial ainda não foi divulgada.
  </p>
  <center><img src="coringa.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>Alita Battle angel</h2>
  
  <p>
  
Uma ciborgue é descoberta por um cientista. Ela não tem memórias de sua criação, mas possui grande conhecimento de artes marciais. 
Enquanto busca informações sobre seu passado, trabalha como caçadora de recompensas e descobre um interesse amoroso.
  </p>
  <center><img src="alita.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>Como treinar o seu dragão 3</h2>
  
  <p>
  Soluço busca realizar seu grande sonho de encontrar um lar pacífico onde os dragões possam viver em segurança. Lá, Banguela descobre uma companheira,
 assim como ele, mas um tanto selvagem. Mas é quando o perigo começa a rondar o lar, 
que a dupla Banguela e Soluço é testada e precisa tomar decisões difíceis para salvar suas espécies.
  </p>
  <center><img src="treinar.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>



 <h2>Vingadores Ultimato</h2>
  
  <p>
  Após Thanos eliminar metade das criaturas vivas, os Vingadores precisam lidar com a dor da perda de amigos e seus entes queridos.
 Com Tony Stark (Robert Downey Jr.) vagando perdido no espaço sem água nem comida, 
Steve Rogers (Chris Evans) e Natasha Romanov (Scarlett Johansson) precisam liderar a resistência contra o titã louco.
  </p>
  <center><img src="vingador.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

 <h2>homem aranha longe de casa</h2>
  
  <p>
  Peter Parker (Tom Holland) está em uma viagem de duas semanas pela Europa, ao lado de seus amigos de colégio, 
quando é surpreendido pela visita de Nick Fury (Samuel L. Jackson). Convocado para mais uma missão heróica,
 ele precisa enfrentar vários vilões que surgem em cidades-símbolo do continente, como Londres, Paris e Veneza, 
e também a aparição do enigmático Mysterio (Jake Gyllenhaal).


  </p>
  <center><img src="aranha.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>

<h2>Toy Story 4</h2>
  
  <p>
  Woody sempre foi confiante a respeito de seu lugar no mundo, e sua prioridade é tomar conta de suas crianças, seja Andy ou Bonnie. 
Mas quando Bonnie adiciona um relutante novo brinquedo ao seu quarto, Forky,
 uma aventura junto a velhos e novos amigos vai mostrar a Woody o quão grande o mundo pode ser para um brinquedo.


  </p>
  <center><img src="toy.jpg"></center>



<br>
<a href="cadastrar.php" class="btn btn-outline-danger">Ingresso</a>



  
	</div>
</body>
</html>
