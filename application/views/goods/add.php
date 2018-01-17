<?php echo validation_errors(); ?>

<?php echo form_open('admin/goods/add'); ?>

<label for="id">ID</label>
<input type="input" name="id" /><br />

<label for="name">Name</label>
<input type="input" name="name" /><br />

<label for="price">Price</label>
<input type="input" name="price" /><br />

<input type="submit" name="submit" value="添加" />

</form>