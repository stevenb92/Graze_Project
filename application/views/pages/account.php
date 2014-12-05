
<table class="table">
<tr>
<th>Box ID</th>
<th>Delivery Date</th>
</tr>
<?php  foreach ($boxes as $box_item):?>
<tr>
<td><a href="<?php echo $account_id ?>/box/<?php echo $box_item['id'] ?>"><?php echo $box_item['id'] ?></a></td>
<td><?php echo $box_item['delivery_date'] ?></td>
</tr>
<?php  endforeach ?>
</table>

<h1>Ratings</h1>
<table class="table">
<tr>
<th>Product ID</th>
<th>Name</th>
<th>Category</th>
<th>Image</th>
<th>Rating</th>
</tr>
<?php  foreach ($ratings as $rating_item):?>
<tr>
<td><?php echo $rating_item['product_id'] ?></td>
<td><?php echo $rating_item['name'] ?></td>
<td><?php echo $rating_item['category'] ?></td>
<td><img src='<?php echo $rating_item['image_url'] ?>'></td>
<td>
<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_student_id1"?>">
<input type="text" name="rrating" value="<?php echo $rating_item['rating']; ?>">
<input type="submit" id="submit" name="rsubmit" value="Update">
</form>
</td>
</tr>
<?php  endforeach ?>
</table>

