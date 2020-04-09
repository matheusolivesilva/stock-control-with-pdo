<?php require_once 'global.php' ?>
<?php
    try {
        $id = $_GET['id'];
	$category = new Category($id);
	$category->loadProducts();
	$listProducts = $category->products;
    } catch (Exception $error) {
        ErrorMessage::handleError($error);
    }
?>

<?php require_once 'header.php' ?>
<div class="row">
	<div class="col-md-12">
		<h2>Category Details</h2>
	</div>
</div>


<dl>
	<dt>ID</dt>
	<dd><?php echo $category->id ?></dd>
	<dt>Name</dt>
	<dd><?php echo $category->name ?></dd>
	<dt>Products</dt>
	<?php if (count($listProducts) > 0): ?>
	<dd>
		<ul>
		    <?php foreach($listProducts as $row): ?>
			<li><a href="/edit-products.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
		    <?php endforeach ?>
		</ul>
	</dd>
	<?php else: ?>
	<dd>There are no products for this category</dd>
	<?php endif ?>
</dl>

<?php require_once 'footer.php' ?>
