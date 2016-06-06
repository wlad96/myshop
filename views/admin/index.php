<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 center"> 
            <br/>
            
            <h2 class="admin-title">Панель администратора</h2>
            
            <br/>
            
            <ul class="admin-buttons">
                <li><a class="btn btn-default" href="/admin/product" role="button" ><span class="glyphicon glyphicon-inbox"></span> Управление товарами</a></li>
                <li><a class="btn btn-default" href="/admin/category" role="button" ><span class="glyphicon glyphicon-list-alt"></span> Управление категориями</a></li>
                <li><a class="btn btn-default" href="/admin/brand" role="button" ><span class="glyphicon glyphicon-star-empty"></span> Управление брендами</a></li>
                <li><a class="btn btn-default" href="/admin/order" role="button" ><span class="glyphicon glyphicon-shopping-cart"></span> Управление заказами</a></li>
                <li><a class="btn btn-default" href="/admin/user" role="button" ><span class="glyphicon glyphicon-user"></span> Управление пользователями</a></li>
            </ul>
            </div>
            <div class="col-sm-3"></div>   
        </div><!--/row-->
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

