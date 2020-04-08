<?php require_once 'global.php' ?>
<?php
    $id = $_GET['id'];
    $product = new Product($id);
    $listCategories = Category::toList();
?>
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
				<input type="text" name="name" value="<?php echo $product->name ?>" id="name" class="form-control" placeholder="Product Name" required>
			</div>
			<div class="form-group">
				<label form="price">Product Price</label>
				<input type="number" name="price" value="<?php echo $product->price ?>" step="0.01" min="0" id="price" class="form-control" placeholder="Product Price" required>
			</div>
			<div class="form-group">
				<label for="quantity">Product Quantity</label>
				<input type="number" name="quantity" value="<?php echo $product->quantity ?>" min="0" id="quantity" class="form-control" placeholder="Product Quantity" require>			
			</div>
			<div class="form-group">
				<label for="category">Product Category</label>
				<select class="form-control" id="category" name="category_id">
					<?php $selected = '' ?>
					<?php foreach($listCategories as $row): ?>
					<?php
					    if ($row['id'] == $product->category) {
					        $selected = 'selected';
					    }
					 ?>
					<option value="<?php echo $row['id'] ?>" <?php echo $selected?>><?php echo $row['name'] ?></option>
					<?php $selected = '' ?>
					<?php endforeach ?>
				</select>
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Save">
		</div>
	</div>
</form>

<?php require_once 'footer.php' ?>
