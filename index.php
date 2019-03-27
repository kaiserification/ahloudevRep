<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Formulaire de test du code barre EAN 13">
    <meta name="author" content="Papa Mouhamadou DIOP">

    <title>Accueil TestEAN13</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>

  <body style="padding-top: 60px;">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Test code barre EAN13</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      
      <div class="page-header" style="margin-bottom: 120px;">
        <h1 class="text-center">Formulaire de test de code barre</h1>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" id="form" novalidate>
            <div class="form-group">
              <label for="">Entrer votre code ici</label>
              <input type="text" name="code" id="code" placeholder="Entrer votre code ici..." class="form-control" required autofocus="" maxlength="13">
              <span class="help-block" id="error"></span>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Vérifier le code</button>
            </div>
          </form>
        </div>
      </div>

    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/ean13.js"></script>
  </body>
</html>
