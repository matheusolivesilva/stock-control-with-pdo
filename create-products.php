<?php require_once 'global.php' ?>
<?php
    try {
        $listCategories = Category::toList();
    } catch (Exception $error) {
        ErrorMessage::handleError($error);
    }
?>
<?php require_once 'header.php' ?>
<div class="row">
	<div class="col-md-12">
		<h2>Create new Product</h2>
	</div>
</div>
<?php if (count($listCategories) > 0): ?>
<form action="create-products-post.php" method="post">
	<div class="row">
		<div clas="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Product Name" require>
			</div>
			<div class="form-group">
				<label for="price">Product Price</label>
				<input type="number" name="price" id="price" step="0.01" min="0" id="price" class="form-control" placeholder="Product Price" require>
			</div>
			<div class="form-group">
				<label for="quantity">Product Quantity</label>
				<input type="number" name="quantity" id="quantity" min="0" id="quantity" class="form-control" placeholder="Product Quantity" required>
			</div>
			<div class="form-group">
				<label for="category">Product Category</label>
				<select id="category" name="category_id" id="category" class="form-control">
					<?php foreach ($listCategories as $row): ?>

					<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Save">
		</div>
	</div>
</form>
<?php else: ?>
	<p>There is no category registered in the system. Please, create a category.</p>
	<?php endif ?>

<?php require_once 'footer.php' ?>
