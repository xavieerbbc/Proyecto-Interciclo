<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <h1>BIENVENIDO A <img src="../imagenes/iconos/pizzaHome2.png" alt="Cobertura Local"></h1>
      <p>PizzaHome es un sistema de tienda en linea.</p>

      <div class="logo">
        <img src="../imagenes/img/imagenadmi.jpg" alt="imglogo">
      </div>


      <article class="cajaCarac">
        <h2>Si quieres pedir comida a domicilio, Pizza Home es la mejor opción. Elige tu pizza favorita o
          cualquiera de los productos de nuestra carta y aplica las mejores promociones. En unos minutos te
          llevamos la comida a casa.</h2>
      </article>

    </div>

    <?php
$status = StatusData::getAll();
?>
    <?php if(count($status)>0):?>

    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-th-list"></i> Operaciones
      </div>
      <div class="widget-body medium no-padding">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tbody>

              <thead>
                <th>Estado</th>
                <th>Cantidad</th>
              </thead>
              <?php foreach($status as $cat):?>
              <tr>
                <td><?php echo $cat->name; ?></td>
                <td><?php $d= BuyData::countByStatusId($cat->id); echo $d->c; ?></td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>

        <?php endif; ?>
      </div>
    </div>





  </div>
</div>


<br><br>
<style type="text/css">
  .cajaCarac {
    text-align: center;
    color: rgb(5, 67, 109);
    border-radius: 10px;
    border: 0.5px solid black;


  }

  p {
    font-family: fantasy;
    text-align: center;
    color: cadetblue;
    font-size: 35px;

  }

  h2 {
    font: bold 90% monospace;
    font-size: 20px;
  }

  .logo img {

    margin: 12px 350px;
    float: center;
    border-radius: 20px;


  }

  .row{
    background-color: white;
  }
</style>