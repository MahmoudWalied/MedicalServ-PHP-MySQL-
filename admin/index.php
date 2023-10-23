<?php require '../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


<div class="col-sm-6">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">All  Services</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="<?php echo BUA.'services/' ?>" class="btn btn-primary"><?php echo count_table('services'); ?></a>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">All Cities</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="<?php echo BUA.'cities/' ?>" class="btn btn-primary"><?php echo count_table('cities'); ?></a>
		</div>
	</div>
</div>


<div class="col-sm-6 mt-5">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">All Orders</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="<?php echo BUA.'orders/' ?>" class="btn btn-primary"><?php echo count_table('orders'); ?></a>
		</div>
	</div>
</div>


<div class="col-sm-6 mt-5">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">All Orders This Day</h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="<?php echo BUA.'orders/' ?>" class="btn btn-primary"><?php echo count_table('orders'); ?></a>
		</div>
	</div>
</div>





<?php require BLA.'/inc/footer.php';  ?>





