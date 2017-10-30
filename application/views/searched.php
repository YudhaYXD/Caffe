<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="panel panel-contents">
			<div class="panel-body animated slideInDown">
				<?php foreach ($find as $key){ ?>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
					<div class="thumbnail">
						<img src="<?= base_url()?>uploads/<?php echo $key->pic ?>" alt="">


						<form action="<?= base_url() ?>Cart/add_cart" method="POST">
							<div class="caption">
								<h4><?php echo $key->name ?></h4>
								<p>
									<?php echo $key->descript ?><br>
									<?php echo $key->price ?>
								</p>
								<p>
									<input type="hidden" name="menu_id" value="<?= $key->menu_id ?>">
									<input type="text" name="qty" class="form-control white" value="1">
								</p>
								<p class="text-center">
									<button type="submit" class="btn circlemed-blu"><i class="fa fa-check"></i></button>
								</p>
							</div>
						</form>
					</div>
				</div><?php  } ?>
			</div>
		</div>
	</div>
</body>
</html>