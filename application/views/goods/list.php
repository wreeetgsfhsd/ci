<table border="1" width="600px">
    <tr>
        <th width="20%">ID</th>
        <th width="20%">name</th>
        <th width="20%">price</th>
        <th width="20%">操作</th>
    </tr>
    <?php foreach ($goods as $good): ?>
        <tr>
            <td><?php echo $good['id']; ?></td>
            <td><?php echo $good['name']; ?></td>
            <td><?php echo $good['price']; ?></td>
            <td>
                <input type="button" value="修改" onclick="location.href='<?php echo base_url("admin/goods/update/".$good["id"]); ?>'">
                <input type="button" value="删除" onclick="location.href='<?php echo base_url("admin/goods/delete/".$good["id"]); ?>'">
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<input type="button" value="添加" onclick="location.href='<?php echo base_url("admin/goods/add"); ?>'">
<?php  echo $this->pagination->create_links();?>