<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./attachs/bootstrap.css">
    <link rel="shortcut icon" href="./attachs/favicon.png" type="image/x-icon" />
    <title>Crawler</title>
  </head>
  <body>
  <?php
    error_reporting(0);
    function curl($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_exec($ch);
      curl_close($ch);
    }
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Darling`s Crawler</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Главная
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="https://omgups.ru">ОмГУПС
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link">TIME: <?php curl("localhost:1235/shell.php?cmd=date");?>
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>

    </div>
    </nav>
    <div class="container">
      <div class="jumbotron">
          <h1 class="text-center">ПОЛУЧЕНИЕ СНИМКА САЙТА</h1><br><br><br><br><br><br>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="POST">
            <div class="form-group">
              <input class="form-control form-control-lg" type="text" placeholder="Пожалуйста, введите веб-сайт, который вы хотите запросить" name="url">
            </div>
              <button type="submit" class="btn btn-primary" style="display:block;margin:0 auto">Получить</button>
          </form>
        </div>
      </div>

      <hr class="my-4">
      <?php
        $url = $_POST['url'];
        if($url){
          echo "Снимок <b>".$url."</b> выглядит следующим образом: <br><br>";
          echo "<pre>";
          curl($url);
          echo "</pre>";
        }
      ?>
    </div>
    <script src="./attachs/jquery.min.js"></script>
    <script src="./attachs/bootstrap.bundle.min.js"></script>
  </body>
</html>

