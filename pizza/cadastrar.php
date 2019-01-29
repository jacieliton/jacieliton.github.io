<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastre-se</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
    .hr{
      width: 50%;
      text-align: left;
    }
    p {
      text-align: center;
    }
  </style>
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
        <a class="nav-link" href="broto.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Procure</button>
    </form>
  </div>
</nav>
  <div class="container">

  <hr class="w-50">
  <center><h2>Cadastre-se</h2></center>
  <hr class="w-50">
  <form action="grave.php" method="POST">
        Nome do Cliente:<br>
        <input type="text" name="nome" required="required">
        <br><br>
        Telefone:<br>
        <input type="text" name="telefone"/ required="required">
        <br><br>
        <div>
        <input type="radio" name="tamanho" value="Broto">Broto
        <br>
        <input type="radio" name="tamanho" value="Pequeno">Pequeno
        <br>
        <input type="radio" name="tamanho" value="Medio">Médio
        <br>
        <input type="radio" name="tamanho" value="Grande">Grande
        <br>
        Endereço:<br>
        <input type="text" name="endereco" required="required">
      </div>
        <br>
        Sabor da Pizza:<br>
        <select name="sabor">
          <option value="Calabresa">Calabresa</option>
          <option value="Lombo">Lombo Canadense</option>
          <option value="Frango">Frango Catupiry</option>
          <option value="Portuguesa">Portuguesa</option>
          <option value="Four">Four Cheese</option>
          <option value="Mousse">Mousse de Morango</option>
          <option value="Banana">Banana com Canela</option>
          <option value="Chocolate com MM">Chocolate com M&M</option>
          <option value="Romeu e Julieta">Romeu e Julieta</option>
          <option value="Chocolate e Briga.">Chocolate e brigadeiro</option>
        </select>
        <br><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar"/>
      </form>
      </div>
</body>
</html>