<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>StockPro - Login</title>
  </head>
<body style=" background-image: url('<?php echo BASE_URL; ?>assets/images/controle-de-estoque.jpg');">

  <div class="container" style="margin-top: 15rem; width: 500px; border: 1px solid black; background-color: white; border-radius: 20px; float: right; margin-right: 7rem;">
      <form class="form-signin" method="POST">
        <div class="text-center mb-4">
          <h1 class="h3 mb-3 mt-3 font-weight-normal text-dark">StockPro - V.1</h1>
        </div>

        <div class="form-label-group text-dark">
          <label for="inputEmail">Número de Acesso</label>
          <input type="text" id="inputEmail" class="form-control" name="number" placeholder="Número de Acesso" required="" autofocus="">
        </div>

        <div class="form-label-group text-dark pt-4">
          <label for="inputPassword">Senha de Acesso</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required="">
        </div>

        <div class="checkbox mb-3 text-dark">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-se de mim
          </label>
        </div>
        <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
          <?php if(!empty($msg)): ?>
                                    <h2> <?php echo $msg?> </h2>
          <?php endif; ?>
        <p class="mt-5 mb-3 text-muted text-center">© 2023 - By Pedro Henrique</p>
      </form>
  </div>



    
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>