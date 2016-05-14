<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/user">Управление пользователями</a></li>
                    <li class="active">Редактировать пользователя</li>
                </ol>
            </div>

            <h4>Редактировать пользователя #<?php echo $id; ?></h4>
            <br/>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Имя пользователя</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $user['name']; ?>">

                        <p>Email пользователя</p>
                        <input type="text" name="email" placeholder="" value="<?php echo $user['email']; ?>">

                        <p>Пароль пользователя</p>
                        <input type="text" name="password" placeholder="" value="<?php echo $user['password']; ?>">

                        <p>Роль</p>
                        <select name="role">
                            <option value="" <?php if ($user['role'] == '') echo ' selected="selected"'; ?>>Клиент</option>
                            <option value="manager" <?php if ($user['role'] == 'manager') echo ' selected="selected"'; ?>>Менеджер</option>
                            <option value="admin" <?php if ($user['role'] == 'admin') echo ' selected="selected"'; ?>>Администратор</option>
                        </select>
                        <br/><br/>
                        <br/>
                        <br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>

        </div>
        <a href="/admin/user/" class="btn btn-default back" title="Выйти без сохранения"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

