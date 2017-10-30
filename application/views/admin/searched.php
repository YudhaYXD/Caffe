<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="panel panel-contents">
			<div class="panel-body animated slideInDown">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Picture</th>
							<th>Name</th>
							<th>Descript</th>
							<th>Price</th>
							<th>Member Discount</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($find as $key){?>
						<tr>
							<td><?php echo $key->menu_id; ?></td>
							<td><img src="<?= base_url()?>uploads/<?php echo $key->pic ?>" width="50px" alt=""></td>
							<td><?php echo $key->name; ?></td>
							<td><?php echo $key->descript; ?></td>
							<td><?php echo $key->price; ?></td>
							<td><?php echo $key->m_price; ?></td>
							<td>
								<div class="btn-group">
									<a href="<?= base_url() ?>Admin/edit/<?=$key->menu_id; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
									<a href="<?= base_url() ?>Admin/delete/<?=$key->menu_id; ?>" class="btn btn-primary"><i class="fa fa-times"></i></a>
								</div>
							</td>
						</tr><?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>