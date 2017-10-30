<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img alt="First slide" src="<?= base_url()?>res/img/carousel.png">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Latte Art</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <p><a class="btn btn-lg btn-primary" href="<?= base_url()?>welcome/menu" role="button">Get some!</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?= base_url()?>res/img/carousel2.png">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Coffee Family</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <p><a class="btn btn-lg btn-primary" href="<?= base_url()?>welcome/menu" role="button">Get some!</a></p>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="<?= base_url()?>res/img/carousel1.png">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>More than just a Beverage</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <p><a class="btn btn-lg btn-primary" href="<?= base_url()?>welcome/menu" role="button">Get some!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <div class="container">
<?php foreach ($feed as $key){ ?><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                </div><div class="media text-center"><i class="fa fa-user fa-2x red"></i>
                <a class="pull-left" href="#">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $key->name ?></h4>
                    <p><?php echo $key->title ?><br>
                        <input id="input-21b" name="rate" type="number" class="rating" value="<?= $key->rate?>" data-readonly="true" data-size="xs" data-show-clear="false" data-show-caption="false">
                        <?php echo $key->comm ?><br>
                        <?php echo $key->time ?><br></p>
                    </div>
                </div>
            </div>
        </div><?php  } ?>
    </div>
</body>
</html>