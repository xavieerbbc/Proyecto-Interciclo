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
        <?php if(count($slides)>0):?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
<?php foreach($slides as $s):?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $cnt; ?>" class="<?php if($cnt==0){ echo "active";}?>"></li>
<?php $cnt++; endforeach; ?>

      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
<?php $cnt=0; foreach($slides as $s):
$url = "admin/storage/slides/".$s->image;
?>

        <div class="item <?php if($cnt==0){ echo "active"; }?>">
          <img src="<?php echo $url; ?>" alt="...">
          <div class="carousel-caption">
            <h2><?php echo $s->title; ?></h2>
          </div>
        </div>
<?php $cnt++; endforeach; ?>
<!--
        <div class="item">
          <img src="http://placehold.it/800x300" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        -->
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-chevron-right"></span>
      </a>
    </div>
    <br>
  <?php endif; ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

  </section>
