<?php require_once 'header.php' ?>

<div class"row">
	<div class="col-md-12">
		<h2>Edit new Product</h2>
	</div>
</div>


<form action="#" method="post">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label form="name">Product Name</label>
				<input type="text" value="The Lord of Rings" id="name" class="form-control" placeholder="Product Name" required>
			</div>
			<div class="form-group">
				<label form="price">Product Price</label>
				<input type="number" value="88.55" step="0.01" min="0" id="price" class="form-control" placeholder="Product Price" required>
			</div>
			<div class="form-group">
				<label for="quantity">Product Quantity</label>
				<input type="number" value=="8" min="0" id="quantity" class="form-control" placeholder="Product Quantity" require>			
			</div>
			<div class="form-group">
				<label for="category">Product Category</label>
				<select class="form-control">
					<option value="1" selected>Books</option>
					<option value="2">Magazines</option>
				</select>
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Save">
		</div>
	</div>
</form>

<?php require_once 'footer.php' ?>
