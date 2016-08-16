<?php require_once 'admin.header.php' ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($product_list as $product): ?>
                        <?php
                            $category_id = $product['category'];
                            $tmp_query = $query_get_all_category . ' WHERE id=' . $category_id;
                            $category_name = $admin->get_all_items($tmp_query);
                            static $i = 0;
                            $i++;
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$product['name']?></td>
                            <td><?=$category_name[0]['name']?></td>
                            <td><?=$product['price']?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="ajaxform" action="admin.add_product.php" class="form-horizontal" role="form" method="post">
            <div class="modal-header">
                <h3>Добавление нового товара</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Название товара</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="inputName" placeholder="Название товара">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Цена</label>
                    <div class="col-sm-3">
                        <input name="price" type="text" class="form-control" id="inputText" placeholder="Цена">
                    </div>
                    <label for="selectCat" class="col-sm-3 control-label">Категория</label>
                    <div class="col-sm-3">
<!--                        <select class="form-control" id="selectCat">-->
<!--                            <option name="cat_1">Обычный</option>-->
<!--                            <option name="cat_2">С солнечной батареей</option>-->
<!--                        </select>-->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Добавить товар</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'admin.footer.php' ?>
