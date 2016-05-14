<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/user">Управление пользователями</a></li>
                    <li class="active">Просмотр пользователя</li>
                </ol>
            </div>


            <h4>Просмотр пользователя #<?php echo $user['id']; ?></h4>
            <br/>

            <h5>Информация о пользователе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                 <?php if ($user['id'] != 0): ?>
                    <tr>
                        <td>ID пользователя</td>
                        <td><?php echo $user['id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td>Имя пользователя</td>
                    <td><?php echo $user['name']; ?></td>
                </tr>
                <tr>
                    <td>Email пользователя</td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
                <tr>
                    <td>Пароль пользователя</td>
                    <td><?php echo $user['password']; ?></td>
                </tr>
                <tr>
                    <td><b>Роль</b></td>
                    <td><?php echo User::getRoleText($user['role']); ?></td>
                </tr>
                <tr>
                    <td>Телефон пользователя</td>
                    <td><?php echo $user['phone']; ?></td>
                </tr>
            </table>

            <a href="/admin/user/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

