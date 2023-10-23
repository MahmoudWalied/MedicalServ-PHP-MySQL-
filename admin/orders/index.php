<?php require '../../config.php'; ?>

<?php require BLA . 'inc/header.php'; ?>


<div class="col-sm-12">
	<h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
	<table class="table table-dark table-bordered">
		<thead>
		<tr class="text-center">
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Mobile</th>
			<th scope="col">Service</th>
			<th scope="col">City</th>
			<th scope="col">Notes</th>
			<th scope="col">Action</th>

		</tr>
		</thead>
		<tbody>
		<?php $data = getRows('orders');
		$x = 1; ?>
		<?php foreach ($data as $row) { ?>
			<tr class="text-center">
				<td scope="row"><?php echo $x; ?></td>
				<td class="text-center"><?php echo $row['order_name']; ?></td>
				<td class="text-center"><?php echo $row['order_email']; ?></td>
				<td class="text-center"><?php echo $row['order_mobile']; ?></td>
				<?php

				$rowCity = getRow('city_id', $row['order_city_id'], 'cities');
				$rowService = getRow('serv_id', $row['order_serv_id'], 'services');
				?>
				<td class="text-center"><?php echo $rowService['serv_name']; ?></td>
				<td class="text-center"><?php echo $rowCity['city_name']; ?></td>
				<td class="text-center"><?php echo $row['order_notes']; ?></td>

				<td class="text-center">
					<a href="#" class="btn btn-danger delete" data-field="order_id" data-id="<?php echo $row['order_id']; ?>"
						 data-table="orders">Delete</a>
				</td>
			</tr>
			<?php $x++;
		} ?>

		</tbody>
	</table>
</div>

<?php require BLA . 'inc/footer.php'; ?>






