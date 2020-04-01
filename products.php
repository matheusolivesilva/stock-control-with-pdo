<?php require_once 'header.php' ?>

<div class="row">
	<div class="col-md-12">
		<h2>Products</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<a href="create-products.php" class="btn btn-info btn-block">Create new Products</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Prices</th>
					<th>Quantity</th>
					<th>Category</th>
					<th class="action">Edit</th>
					<th class="action">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>The Lord of Ringts</td>
					<td>R$80,55</td>
					<td>2</td>
					<td>Books</td>
					<td><a href="/edit-products.php" class="btn btn-info">Edit</a></td>
					<td><a href="#" class="btn btn-danger">Delete</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php require_once 'footer.php' ?>
