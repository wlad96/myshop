<!--pos.:    views/cabinet/index    -->
<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row cabinet">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
            <h3>
                <?php 
                       echo  "Личный кабинет"; 
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
            <!--<a href="/cabinet/edit">Редактировать данные</a>-->
            
            <a class="btn btn-default" href="/cabinet/edit" role="button" ><span class="glyphicon glyphicon-cog"></span> Редактировать данные</a>
            <br/>
            <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            <!--  <div class="right"> <br/><br/>-->
            
            <?php if ($user['role']=='admin')
                        // echo  "<a href='/admin/index'>Перейти в Панель Администратора</a>";     
                          echo  "<a class='btn btn-default' href='/admin/index' role='button' ><span class='glyphicon glyphicon-inbox'></span> Перейти в Панель Администратора</a>";     
            ?>
            
            
                 <!--</div>-->     
            </div>
        </div> <!--/row-->
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>