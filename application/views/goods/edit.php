<?php echo validation_errors(); ?>

<?php echo form_open('admin/goods/update/'. $goods["id"]); ?>

<label for="id">ID</label>
<input type="hidden" name="id" value="<?php echo $goods['id'];?>"/><br />

<label for="name">Name</label>
<input type="input" name="name" value="<?php echo $goods['name'];?>"/><br />

<label for="price">Price</label>
<input type="input" name="price" value="<?php echo $goods['price'];?>"/><br />

<input type="submit" name="submit" value="修改" />

</form>