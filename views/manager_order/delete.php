<?php include ROOT . '/views/layouts/header_manager.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/manager">Менеджерпанель</a></li>
                    <li><a href="/manager/order">Управление заказами</a></li>
                    <li class="active">Удалить заказ</li>
                </ol>
            </div>
            <h4>Удалить заказ #<?php echo $id; ?></h4>
            <p>Вы действительно хотите удалить этот заказ?</p>
             <form method="post">
                <input class="btn btn-danger" type="submit" name="submit" value="Удалить" />
            </form>
            </br>
            <a href="/manager/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div><!--/row-->
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

