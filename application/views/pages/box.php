
<?php echo $data['account_id'] ?>
<table class="table">
<tr>
<th>Box ID</th>
<th>Product ID</th>
<th>Name</th>
<th>Category</th>
<th>Image</th>
</tr>
<?php  foreach ($products as $product_item):?>
<tr>
<td><a href=""><?php echo $product_item['box_id'] ?></a></td>
<td><?php echo $product_item['product_id'] ?></td>
<td><?php echo $product_item['name'] ?></td>
<td><?php echo $product_item['category'] ?></td>
<td><img src="<?php echo $product_item['image_url'] ?>"></img></td>
</tr>

<?php  endforeach ?>
</table>
