<!--pos.:    views/cabinet/index    -->
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <!--<h4>Привет, <?php echo $user['name'];?>!</h4>-->
           
            <h4>
                <?php if ($user['role']=='admin')
                           echo "Привет, администратор ".$user['name']."!";
                      else echo "Привет, ".$user['name'];                
                ?>
            </h4>           
            <br>
            <a href="/cabinet/edit">Редактировать данные</a>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
                <!--<div class="right">--> <br><br>
                <a href="/admin/index">Перейти в Панель Администратора</a>
                 <!--</div>-->

          
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>