<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1>Ingresar segundos y calcular la cantidad en: <strong>Horas, Minutos y segundos</strong></h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Ingresar Segundos:</label>
                                    <input type="number" class="form-control" name="number">
                                </div>
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>
                <?php
                    $numero = $_GET ['number'];
                    $horas = floor($numero / 3600);
                    $minutos = floor(($numero - ($horas * 3600)) / 60);
                    $segundos = $numero - ($horas * 3600) - ($minutos * 60);

                ?>
                  <div class="alert alert-success">
                         <p>Horas: <?php print($horas); ?> </p>
                         <p>Minutos: <?php print($minutos); ?> </p>
                         <p>Segundos: <?php print($segundos); ?> </p>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio</a></p>
              </div>
          </div>


      </div>
</body>
</html>