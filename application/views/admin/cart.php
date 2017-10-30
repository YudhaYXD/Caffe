<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="panel panel-default animated slideInDown">
			<div class="panel-body panel-contents">
				<div class="panel panel-default ">
					<div class="panel-heading">
						<h3 class="panel-title">Order Cart</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<form action="" method="POST" role="form">
									<div class="form-group">
									<!-- <label for="">label</label>
									<input type="text" class="form-control" id="" placeholder="Input field">
								</div> -->
							<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Total Price</th>
									<th>table Number</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody><?php 
						
						foreach ($order as $key) {
							?>
								<tr>
									<td><?= $key->order_id ?></td>
									<td><?= $key->name ?></td>
									<td><?= $key->total_price ?></td>
									<td><?= $key->num ?></td>
									<td><a href="<?= base_url()?>Admin/detail_order/<?= $key->order_id ?>" type="button" class="btn circle-blu"><i class="fa fa-check"></i></a></td>
								</tr><?php }?>
								
							
								<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
							</form><thead>
								
							</tbody>
						<p><a href="<?= base_url()?>cart/clear" type="button" class="btn btn-primary">Clear</a></p></table>
					</div>
				</div>
			</div>
		</div>

		
	</div>
</body>
</html>