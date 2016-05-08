<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/user">Управление пользователями</a></li>
                    <li class="active">Удалить пользователя</li>
                </ol>
            </div>


            <h4>Удалить пользователя #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить этого пользователя?</p>           
             <form method="post">
                <input class="btn btn-danger" type="submit" name="submit" value="Удалить" />
             </form>
            </br>
            <a href="/admin/user/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

