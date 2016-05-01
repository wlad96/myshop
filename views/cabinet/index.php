<!--pos.:    views/cabinet/index    -->
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row cabinet">
            <h3>
                <?php if ($user['role']=='admin')
                              echo  "Кабинет администратора";  
                         else echo "Кабинет пользователя";
                ?>
            </h3>
            <h4>
                <?php // if ($user['role']=='admin')
                      //    echo "Привет, администратор ".$user['name']."!";
                      //else 
                          echo "Привет, ".$user['name'];                
                ?>
            </h4>           
            <br/>
            <a href="/cabinet/edit">Редактировать данные</a>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
                <!--<div class="right">--> <br/><br/>
            
            <?php if ($user['role']=='admin')
                          echo  "<a href='/admin/index'>Перейти в Панель Администратора</a>";             
            ?>
            
            
                 <!--</div>-->     
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>