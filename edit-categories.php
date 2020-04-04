<?php require_once 'header.php' ?>
<?php require_once 'global.php' ?>
<?php
    $id = $_GET['id'];
    $category = new Category($id);
?>

<div class="row">
	<div class="col-md-12">
		<h2>Edit Category</h2>
	</div>
</div>
<form action="edit-categories-post.php" method="post">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for="name"> Category Name</label>
				<input type="hidden" name="id" value="<?php echo $category->id ?>">
				<input type="text" value="<?php echo $category->name ?>" id="name" name="name" class="form-control" placeholder="Category Name">
			</div>
			<input type="submit" class="btn btn-success btn-block" value="Save">
		</div>
	</div>
</form>


<?php require_once 'footer.php' ?>
