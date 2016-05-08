<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Удалить категорию</li>
                </ol>
            </div>


            <h4>Удалить категорию #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту категорию?</p>

             <form method="post">
                <input class="btn btn-danger" type="submit" name="submit" value="Удалить" />
            </form>
            </br>
            <a href="/admin/category/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

