<!--pos.:    views/cabinet/index    -->
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row cabinet">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 center">   
                <h3>
                    <?php 
                           echo  "Личный кабинет"; 
                    ?>
                </h3>
                <h4>
                    <?php               
                           if ($user['role']=='admin') 
                               echo "Привет, администратор ".$user['name'];  
                           else if ($user['role']=='manager') 
                                echo "Привет, менеджер ".$user['name']; 
                           else
                               echo "Привет, ".$user['name']; 
                    ?>
                </h4>           
                <br/>

                <a class="btn btn-primary" href="/cabinet/edit" role="button" ><span class="glyphicon glyphicon-cog"></span> Редактировать данные</a>
                <br/>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->

                <?php if ($user['role']=='admin')   
                              echo  "<a class='btn btn-primary' href='/admin/index' role='button' ><span class='glyphicon glyphicon-inbox'></span> Перейти в Панель Администратора</a>";     
                ?>
                <?php if ($user['role']=='manager')   
                              echo  "<a class='btn btn-primary' href='/manager/index' role='button' ><span class='glyphicon glyphicon-inbox'></span> Перейти к списку заказов</a>";     
                ?>
                
            </div>
            <div class="col-sm-3"></div>   
        </div> <!--/row-->
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>