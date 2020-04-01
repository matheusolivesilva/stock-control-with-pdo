<?php require_once 'header.php' ?>
<div class="row">
	<div class="col-md-12">
		<h2>Create new Product</h2>
	</div>
</div>

<form action="crate-products-post.php" method="post">
	<div class="row">
		<div clas="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" id="name" class="form-control" placeholder="Product Name" require>
			</div>
			<div class="form-group">
				<label for="price">Product Price</label>
				<input type="number" step="0.01" min="0" id="price" class="form-control" placeholder="Product Price" require>
			</div>
			<div class="form-group">
				<label for="quantity">Product Quantity</label>
				<input type="number" min="0" id="quantity" class="form-control" placeholder="Product Quantity" required>
			</div>
			<div class="form-group">
				<label for="category">Product Category</label>
				<select id="category" class="form-control">
					<option value="1">Books</option>
					<option value="2">Magazines</option>
				</select>
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Save">
		</div>
	</div>
</form>

<?php require_once 'footer.php' ?>
