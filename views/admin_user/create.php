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


            <h4>Добавить нового пользователя</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <!--<form action="#" method="post" enctype="multipart/form-data">-->
                    <form action="#" method="post">
                        
                        <p>Имя пользователя</p>
                        <input type="text" name="name" placeholder="" value="">
                        
                        <p>Email пользователя</p>
                        <input type="text" name="email" placeholder="" value="">

                        <p>Пароль пользователя</p>
                        <input type="text" name="password" placeholder="" value="">
                        
                        <p>Роль</p>                      
                            <select name="role">
                                <option value="" selected="selected">Клиент</option>
                                <option value="manager">Менеджер</option>
                                <option value="admin">Администратор</option>
                            </select>
                        
<!--                        <p>Телефон пользователя</p>
                        <input type="text" name="phone" placeholder="" value="">-->
                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
        <a href="/admin/user/" class="btn btn-default back" title="Выйти без сохранения"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

