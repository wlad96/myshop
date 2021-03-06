<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>
            
            <h4>Редактировать товар #<?php echo $id; ?></h4>
            <br/>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Производитель</p>
                         <select name="brand_id">
                            <?php if (is_array($brandsList)): ?>
                                <?php foreach ($brandsList as $brand): ?>
                                    <option value="<?php echo $brand['id']; ?>" 
                                        <?php if ($product['brand_id'] == $brand['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $brand['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <p>Изображение товара</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p>Детальное описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>
                        
                        <p>Размер экрана, "</p>
                        <textarea name="screen_size"><?php echo $product['screen_size']; ?></textarea>
                        
                        <br/><br/>
                        
                        <p>Частота процессора, МГц</p>
                        <textarea name="CPU"><?php echo $product['CPU']; ?></textarea>
                        
                        <p>Объем оперативной памяти, Гб</p>
                        <textarea name="RAM"><?php echo $product['RAM']; ?></textarea>
                        
                        <p>Объем жесткого диска, Гб</p>
                        <textarea name="hard_disk"><?php echo $product['hard_disk']; ?></textarea>
                        
                        <p>Оптический привод</p>
                         <select name="drive">
                            <option value="1" <?php if ($product['drive'] == 1) echo ' selected="selected"'; ?>>Есть</option>
                            <option value="0" <?php if ($product['drive'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <p>Время автономной работы, ч</p>
                        <textarea name="battery_life"><?php echo $product['battery_life']; ?></textarea>
                        
                        <p>Вес, кг</p>
                        <textarea name="weight"><?php echo $product['weight']; ?></textarea>
                        
                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Лидер продаж</p>
                        <select name="is_hit">
                            <option value="1" <?php if ($product['is_hit'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_hit'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
        <a href="/admin/product/" class="btn btn-default back" title="Выйти без сохранения"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

