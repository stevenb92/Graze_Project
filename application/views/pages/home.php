<?php /* <table class="table">
<tr>
	<th>id</th>
	<th>Name</th>
	<th>Category</th>
	<th>Image</th>
</tr>
<?php foreach ($products as $product_item): ?>
<tr>
	<td><p><?php echo $product_item['id'];?></p></td>
	<td><p><?php echo $product_item['name'];?></p></td>
	<td><p><?php echo $product_item['category'];?></p></td>
	<td><img src="<?php echo $product_item['image_url'];  ?>"></td>
</tr>
<?php endforeach ?>
</table>
</br> */
?>
<div class="dropdown" style="left: 42%">
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		Select an Account Number
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		<?php foreach ($accounts as $account_item): ?>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="account/<?php echo $account_item['id'];  ?>"><?php echo $account_item['id']; ?></a></li>
		<?php endforeach ?>
		
	</ul>
</div>


