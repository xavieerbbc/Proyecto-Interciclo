<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<br><br><br><br><br><br>  <div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">Ingresar al sistema</div>
        <div class="panel-body">
          <?php// echo sha1(md5("tecnotronika"));?>
<form role="form" method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Ingresar email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contrase&ntilde;a</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Contrase&ntilde;a">
  </div>
  <button type="submit" class="btn btn-block btn-default">Ingresar</button>
</form>


        </div>
      </div>
    </div>
  </div>
  </div>
</body>
<style type="txt/css">
    body{
      background-color:red;
      background-size: 100;
    }
  </style>
</html>



