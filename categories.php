<?php require_once 'classes/Category.php' ?>

<?php
    $category = new Category();
    $list = $category->toList();
?>

<?php require_once 'header.php' ?>

<div class="row">
	<div class="col-md-12">
		<h2>Categories</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<a href="create-categories.php" class="btn btn-info btn-block">Create New Category</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th class="action">Edit</th>
					<th class="action">Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $row): ?>
				<tr>
					<td><a href="/categories-details.php" class"btn btn-link"><?php echo $row['id'] ?></a></td>
					<td><a href="/categories-details.php" class="btn btn-link"><?php echo $row['name'] ?></a></td>	
					<td><a href="/edit-categories.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a></td>			
					<td><a href="/delete-categories.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
				</tr>	
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>


<?php require_once 'footer.php' ?>


