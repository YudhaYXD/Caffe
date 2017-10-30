<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/star-rating.css">
	<script type="text/javascript" src="<?= base_url()?>res/js/star-rating.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel-contents panel-default animated slideInDown">
			<div class="panel-body">
				<?php foreach ($feed as $key){ ?>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
					<div class="panel panel-default">
						<div class="panel-body">
						</div><div class="media text-center">
						<a class="pull-left" href="#">
							<!-- <img class="media-object" src="<?= base_url()?>res/img/pika.jpg" alt="Image"> -->
						</a>
						<div class="media-body">
							<h4 class="media-heading"><?php echo $key->name ?></h4>
							<p>
								<?php echo $key->title ?><br>
								<input id="input-21b" name="rate" type="number" class="rating" value="<?= $key->rate?>" data-readonly="true" data-size="xs" data-show-clear="false" data-show-caption="false">
								<?php echo $key->comm ?><br>
								<?php echo $key->time ?><br></p>
								<a href="<?= base_url() ?>Admin/delete_feed/<?=$key->id_com; ?>" class="btn circlemed-red"><i class="fa fa-times"></i></a>
							</div>
						</div>
					</div>
				</div><?php  } ?>
			</div>
		</div>
	</div>
</body>
</html>