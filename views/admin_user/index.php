<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>
                        
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление пользователями</li>
                </ol>
            </div>
            
             <a href="/admin/user/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить пользователя</a>

            <h3>Список пользователей</h3>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID пользователя</th>
                    <th>Имя пользователя</th>
                    <th>Email пользователя</th>
                    <th>Пароль пользователя</th>
                    <th>Роль пользователя</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($usersList as $user): ?>
                    <tr>
                        <td>
                            <a href="/admin/user/view/<?php echo $user['id']; ?>">
                                <?php echo $user['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><?php echo User::getRoleText($user['role']); ?></td>  
                        <td><a href="/admin/user/view/<?php echo $user['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/admin/user/update/<?php echo $user['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td class="red-cross" ><a href="/admin/user/delete/<?php echo $user['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
         <a href="/admin/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

