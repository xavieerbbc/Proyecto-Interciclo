<?php 
$coin_symbol = ConfigurationData::getByPreffix("general_coin")->val;
$img_default = ConfigurationData::getByPreffix("general_img_default")->val;
$cnt=0;
$slides = SlideData::getPublics();
$featureds = ProductData::getFeatureds();
?>
<section>
  <div class="container">

  <div class="row">

  <div class="col-md-12">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
   

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php

$nproducts = count($featureds);
$filas = $nproducts/3;
$extra = $nproducts%3;
if($filas>1&& $extra>0){ $filas++; }
$n=0;
?>
<?php if(count($featureds)>0):?>
<a href="./"><div style="background:#333;font-size:25px;color:white;padding:5px;">Productos Destacados</div></a>
<br>
<?php for($i=0;$i<$filas;$i++):?>
  <div class="row">
<?php for($j=0;$j<3;$j++):
$p=null;
if($n<$nproducts){
$p = $featureds[$n];
}
?>
<?php if($p!=null):
$img = "admin/storage/products/".$p->image;
if($p->image==""){
  $img=$img_default;
}
?>
  <div class="col-md-4">
 <center>   <img src="<?php echo $img; ?>"  style="width:120px;height:120px;"></center>
  <h4 class="text-center"><?php echo $p->name; ?></h4>
<h3 class="text-center text-primary"> <?php echo $coin_symbol." ".number_format($p->price,2,".",","); ?></h3>
<?php 
$in_cart=false;
if(isset($_SESSION["cart"])){
  foreach ($_SESSION["cart"] as $pc) {
    if($pc["product_id"]==$p->id){ $in_cart=true;  }
  }
  }

  ?>
<center>

<?php
 if(!$p->in_existence):?>

<a href="javascript:void()" class="btn btn-labeled btn-warning tip" title="No disponible">
                <span ><i class="fa fa-shopping-cart"></i></span> No Disponible</a>
<br>

<?php elseif(!$in_cart):?>

<a href="index.php?action=addtocart&product_id=<?php echo $p->id; ?>&href=cat" class="btn btn-labeled btn-primary tip" title="A&ntilde;adir al carrito">
                <span class=""><i class="fa fa-shopping-cart"></i></span> Comprar</a>
<br>
<?php else:?>
<center><a href="javascript:void()" class="btn btn-labeled btn-success tip" title="Ya esta en el carrito">
                <span ><i class="fa fa-shopping-cart"></i></span> Ya esta agregado</a>
<br>
<?php endif; ?>
<a href="index.php?view=producto&product_id=<?php echo $p->id; ?>">Detalles</a>
                </center>

  </div>
<?php endif; ?>
<?php $n++; endfor; ?>
  </div>
<?php endfor; ?>
<?php else:?>
  <div class="jumbotron">
  <h2>No hay productos destacados.</h2>
  <p>En la pagina principal solo se muestran productos marcados como destacados.</p>
  </div>
<?php endif; ?>



  </div>

  </div>


  </div>
  </section>
