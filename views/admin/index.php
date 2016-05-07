<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Добрый день, администратор!</h4>
            
            <br/>
            
            <p>Вам доступны такие возможности:</p>
            
            <br/>
            
            <ul class="admin-buttons">
<!--                <li><a href="/admin/product">Управление товарами</a></li>
                <li><a href="/admin/category">Управление категориями</a></li>
                <li><a href="/admin/brand">Управление брендами</a></li>
                <li><a href="/admin/order">Управление заказами</a></li>
                <li><a href="/admin/user">Управление пользователями</a></li>-->
                <li><a class="btn btn-default" href="/admin/product" role="button" ><span class="glyphicon glyphicon-inbox"></span> Управление товарами</a></li>
                <li><a class="btn btn-default" href="/admin/category" role="button" ><span class="glyphicon glyphicon-list-alt"></span> Управление категориями</a></li>
                <li><a class="btn btn-default" href="/admin/brand" role="button" ><span class="glyphicon glyphicon-star-empty"></span> Управление брендами</a></li>
                <li><a class="btn btn-default" href="/admin/order" role="button" ><span class="glyphicon glyphicon-shopping-cart"></span> Управление заказами</a></li>
                <li><a class="btn btn-default" href="/admin/user" role="button" ><span class="glyphicon glyphicon-user"></span> Управление пользователями</a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

