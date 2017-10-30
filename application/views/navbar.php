<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top animated SlideInDown" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url()?>welcome/index">Lorem @</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
			<!-- <li class="active"><a href="#">Link</a></li>
			<li><a href="#">Link</a></li> -->
		</ul>
		<form action="<?= base_url()?>welcome/search" method="POST" class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Search" required>
			</div>
			<button type="submit" class="btn-circle btn-default"><i class="fa fa-search"></i></button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<!-- <li><a href="#modal-id" data-toggle="modal"><i class="fa fa-user"></i></a></li> -->
			<li><a href="<?= base_url()?>welcome/index"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= base_url()?>welcome/menu"><i class="fa fa-coffee"></i> Menu</a></li>
			<li><a href="<?= base_url()?>cart/index"><i class="fa fa-cart-arrow-down"></i> Cart
				<?php 
				if($this->cart->total_items()==0){
				}else{
					echo '<span class="badge">'.$this->cart->total_items().'</span>';
				} 
				?>
				</a>

		</li>
		<li><a data-toggle="modal" href='#modal-feedback'><i class="fa fa-comment"></i> Feedback</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-navicon"></i><!-- <b class="caret"></b> --></a>
			<ul class="dropdown-menu animated zoomIn">

				<?php 
				if($this->session->userdata('desc')=="Member"){
					echo '<li><a href="">Welcome '.$this->session->userdata('user').'</a></li>';
					echo '<li><a href="'.base_url().'welcome/guide"><i class="fa fa-info"></i> Guide</a></li>';
					echo '<li><a data-toggle="modal" href="'.base_url().'login/logout'.'"><i class="fa fa-sign-out"></i> Sign out</a></li>';
				}else{
					echo '<li><a href="'.base_url().'welcome/guide"><i class="fa fa-info"></i> Guide</a></li>';
					echo '<li><a data-toggle="modal" href="#modal-id"><i class="fa fa-sign-in"></i> Sign In</a></li>';
				}
				?>

			</ul>
		</li>
	</ul>
</div><!-- /.navbar-collapse -->
</nav>
</body>
</html>	