<table style="width: 83%;" class="table align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Ảnh sản phẩm</th>
            <th scope="col">Giá sản phẩm</th>
            <th scope="col" style="width: 300px;">Mô tả </th>
            <th scope="col">Danh mục</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $prd = show_prd();

        ?>
        <?php foreach ($prd as $item) : ?>
            <tr>
                <th scope="row"><?= $item['id_prd'] ?></th>
                <td><?= $item['name_prd'] ?></td>
                <td><img src="../image/img_prd/<?= $item['img_prd'] ?>" width="120px" alt=""></td>
                <td><?= $item['price_prd'] ?>.000 VND</td>
                <td><?= $item['desc_prd'] ?></td>
                <td><?= $item['id_cate'] ?></td>
                <td>
                    <a href="index.php?act=form_update_prd&id_prd=<?= $item['id_prd'] ?>"><button type="button" class="btn btn-secondary" ;>Update</button></a>
                    <a href="index.php?act=delete_prd&id_prd=<?= $item['id_prd'] ?>" onclick=" return confirm('Bạn có chắc chắn muốn xóa không ?' )"><button type="button" class="btn btn-secondary">Delete</button></a>
                </td>
            </tr>

        <?php endforeach ?>

    </tbody>
</table>

<a href="index.php?act=form_add_prd"><button type="button" class="btn btn-success" style="margin-left: 250px;">Thêm sản phẩm</button></a>