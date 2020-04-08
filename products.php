<?php require_once 'global.php' ?>
<?php require_once 'header.php' ?>

<?php
    try{
        $list = Product::toList();
    } catch(Exception $error) {
        ErrorMessage::handleError($error);
    }
?>

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
	        <?php if(count($list) > 0): ?>
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
			<?php foreach ($list as $row): ?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td>R$<?php echo number_format($row['price'], 2, ",", ".") ?></td>
					<td><?php echo $row['quantity'] ?></td>
					<td><?php echo $row['category_name'] ?> </td>
					<td><a href="/edit-products.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a></td>
					<td><a href="/delete-products-post.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<?php else: ?>
		    <p>No registrered products</p>
		<?php endif ?>
	</div>
</div>

<?php require_once 'footer.php' ?>
