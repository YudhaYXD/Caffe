<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<div class="container">
		<div class="panel panel-default panel-contents animated slideInDown">
			<div class="panel-body panel-contents">
				<div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#All" aria-controls="All" role="tab" data-toggle="tab">All</a></li>
						<li role="presentation"><a href="#Beverages" aria-controls="Beverages" role="tab" data-toggle="tab"><i class="fa fa-coffee"></i> Beverages</a></li>
						<li role="presentation"><a href="#Sandwiches" aria-controls="Sandwiches" role="tab" data-toggle="tab"><i class="fa fa-cutlery"></i> Sandwiches</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content panel-contents animated fadeIn">
						<div role="tabpanel" class="tab-pane active" id="All">
							<div class="row">
								<?php foreach ($contents as $key){ ?>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="thumbnail">
										<img src="<?= base_url()?>uploads/<?php echo $key->pic ?>" alt="">
										<form action="<?= base_url() ?>Cart/add_cart" method="POST">
											<div class="caption">
												<h4><?php echo $key->name ?></h4>
												<p>
													<?php echo $key->descript ?><br>
													Rp.<?php echo $key->price ?>,-
												</p>
												<p>
													<input type="hidden" name="menu_id" value="<?= $key->menu_id ?>">
													<input type="text" class="form-control white" name="qty" value="1">
												</p>
												<p class="text-center">
													<!-- <a href="<?= base_url()?>cart/index" type="submit" class="btn btn-primary">Submit</a> -->
													<!-- <input type="submit" class="btn btn-primary"> -->
													<button type="submit" class="btn circlemed-blu"><i class="fa fa-check"></i></button>
												</p>
											</div>
										</form>
									</div>
								</div><?php  } ?>
							</div>
							<div class="text-center"><?php echo $paging;?></div>
						</div>

						
						<div role="tabpanel" class="tab-pane animated fadeIn" id="Beverages">
							<div class="row">
								<?php foreach ($menu1 as $key){ ?>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="thumbnail">
										<img src="<?= base_url()?>uploads/<?php echo $key->pic ?>" alt="">
										<form action="<?= base_url() ?>Cart/add_cart" method="POST">
											<div class="caption">
												<h4><?php echo $key->name ?></h4>
												<p>
													<?php echo $key->descript ?><br>
													Rp.<?php echo $key->price ?>,-
												</p>
												<p>
													<input type="hidden" name="menu_id" value="<?= $key->menu_id ?>">
													<input type="text"  class="form-control white" name="qty" value="1">
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
						<div role="tabpanel" class="tab-pane animated fadeIn" id="Sandwiches">
							<div class="row">
								<?php foreach ($menu2 as $key){ ?>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="thumbnail">
										<img src="<?= base_url()?>uploads/<?php echo $key->pic ?>" alt="">
										<form action="<?= base_url() ?>Cart/add_cart" method="POST">
											<div class="caption">
												<h4><?php echo $key->name ?></h4>
												<p>
													<?php echo $key->descript ?><br>
													Rp.<?php echo $key->price ?>,-
												</p>
												<p>
													<input type="hidden" name="menu_id" value="<?= $key->menu_id ?>">
													<input type="text"  class="form-control white" name="qty" value="1">
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>	