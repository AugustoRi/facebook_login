<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook | login</title>
  <link rel="stylesheet" href="./styles/style.css">
  <!--fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <a href="./index.html"><h2>Facebook</h2></a>
      </div>
      <!--logo-->
      <form method="post" action="#" class="form-login">
        <div class="form-element">
          <p>E-mail ou telefone:</p>
          <input type="email">
        </div>
        <!--form-element-->
        <div class="form-element">
          <p>Senha:</p>
          <input type="password">
        </div>
        <!--form-element-->
        <div class="form-element">
          <input type="submit" name="acao" value="Enviar">
        </div>
        <!--form-element-->
      </form>
      <!--form-login-->
      <div class="clear"></div>
    </div>
    <!--container-->
  </header>
  <main>
    <div class="container">
      <div class="img-cadastro">
        <p>
          O Facebook ajuda você a se conectar e compartilhar com as pessoas
          que fazem parte da sua vida.
        </p>
        <img src="./images/img1.png" alt="imagem do banner principal">
      </div>
      <!--img-cadastro-->
      
      <div class="abrir-conta">
        <h2>Abra uma conta</h2>
        <h3>É gratuito e sempre será.</h3>
        <form action="novo-usuario" class="criar-conta">
          <div class="w50 reset">
            <input type="text" placeholder="Nome">
          </div>
          <!--w50-->
          <div class="w50">
            <input type="text" placeholder="Sobrenome">
          </div>
          <!--w50-->
          <div class="w100">
            <input type="email" placeholder="Celular ou E-mail">
          </div>
          <!--w100-->
          <div class="w100">
            <input type="password" placeholder="Nova senha">
          </div>
          <!--w100-->
          <div class="w100">
            <h2>Data de nascimento:</h2>
            <select name="nascimento-dia" class="nascimento">
              <?php
                for($i = 1; $i <= 31; $i++ ) {
              ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>
            <select name="nascimento-mes" class="nascimento">
              <option value="1">Janeiro</option>
              <option value="2">Fevereiro</option>
              <option value="3">Março</option>
              <option value="4">Abril</option>
              <option value="5">Maio</option>
              <option value="6">Junho</option>
              <option value="7">Julho</option>
              <option value="8">Agosto</option>
              <option value="9">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
            <select name="nascimento-ano" class="nascimento">
            <?php
                for($i = 1930; $i <= 2021; $i++ ) {
              ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>
          </div>
          <!--w100-->
          <div class="w100">
            <div class="input-radio">
              <input type="radio" name="sexo" value="feminino">
              <h2>Feminino</h2>
            </div>
            <!--input-radio-->
            <div class="input-radio">
              <input type="radio" name="sexo" value="masculino">
              <h2>Masculino</h2>
            </div>
            <!--input-radio-->
            <div class="clear"></div>
          </div>
          <!--w100-->
          <div class="w100">
            <input type="submit" action="acao" value="Cadastrar">
          </div>
          <!--w100-->
          <div class="clear"></div>
        </form>
        <!--criar-conta-->
      </div>
      <!--abrir-conta-->
      <div class="clear"></div>
    </div>
    <!--container-->
  </main>
  <footer class="footer-linguas">
    <div class="container">
      <a class="selected-lingua" href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
    </div>
    <!--container-->

    <div style="border: 0;padding-top: 10px;" class="container">
      <a class="selected-lingua" href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
    </div>
    <!--container-->

    <div style="border: 0;padding-top: 10px;" class="container">
      <a class="selected-lingua" href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
      <a href="#">Português (BR)</a>
    </div>
    <!--container-->
  </footer>
  <!--footer-linguas-->
</body>
</html>