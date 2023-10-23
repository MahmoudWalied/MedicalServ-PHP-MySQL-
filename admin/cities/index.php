<?php require '../../config.php'; ?>

<?php require BLA . 'inc/header.php'; ?>

<div class="col-sm-12">
	<h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
	<table class="table table-dark table-bordered">
		<thead>
		<tr class="text-center">
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Action</th>

		</tr>
		</thead>
		<tbody>
		<?php $data = getRows('cities');
		$x = 1; ?>
		<?php foreach ($data as $row) { ?>
			<tr class="text-center">
				<td scope="row"><?php echo $x; ?></td>
				<td class="text-center"> <?php echo $row['city_name'] ?>  </td>

				<td class="text-center">
					<a href="<?php echo BUA . 'cities/edit.php?id=' . $row['city_id']; ?>" class="btn btn-info">Edit</a>
					<a href="#" class="btn btn-danger delete" data-field="city_id" data-id="<?php echo $row['city_id']; ?>"
						 data-table="cities">Delete</a>
				</td>
			</tr>
			<?php $x++;
		} ?>

		</tbody>
	</table>
</div>


<?php require BLA . 'inc/footer.php'; ?>






