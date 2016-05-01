<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление брендами</li>
                </ol>
            </div>

            <a href="/admin/brand/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить бренд</a>
            
            <h4>Список брендов</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID бренда</th>
                    <th>Название бренда</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($brandsList as $brand): ?>
                    <tr>
                        <td><?php echo $brand['id']; ?></td>
                        <td><?php echo $brand['name']; ?></td>
                        <td><a href="/admin/brand/update/<?php echo $brand['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td class="red-cross"><a href="/admin/brand/delete/<?php echo $brand['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
         <a href="/admin/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

