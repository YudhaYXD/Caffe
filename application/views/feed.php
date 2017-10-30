<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>res/css/star-rating.css">
<script type="text/javascript" src="<?= base_url()?>res/js/star-rating.js"></script>
<head>
	<title></title>
</head>
<body>
<div class="modal fade" id="modal-feedback">
	<div class="modal-dialog">
	<form action="<?= base_url().'Welcome/feed' ?>" method="POST">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-comment"></i> Provide a Feedback</h4>
			</div>
			<div class="modal-body">
			<input id="input-21b" name="rate" type="number" class="rating" min=0 max=5 step=0.2 data-size="xs" data-show-clear="false" data-show-caption="false" required><br>
			<input type="text" name="title" id="input" class="form-control white" placeholder="Title"><br>
				<textarea name="comm" id="input
				" class="form-control white" rows="3" placeholder="Share your Experience"></textarea>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn circlemed-red"><i class="fa fa-paper-plane"></i></button>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>