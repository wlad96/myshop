<?php include ROOT . '/views/layouts/header.php'; ?>
<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
               <!--?php
                    if( isset( $_POST['begin'] ) )
                    {
                        switch( $_POST['begin'] )
                        {
                            case 'one':
                                echo '<script>location.href = "http://myshop/1question";</script>'; //переход к вопросу 1
                                exit;
                            case 'two':
                               echo '<script>location.href = "http://myshop/catalog";</script>';
                               exit;                             
                        }
                    }
                    ?> -->
 
<!--                        <form method="post">                           
                            <h4>Данный тест поможет Вам определиться с выбором ноутбука</h4><br/>
                            <h4>Начать тест?</h4>
                            <label><input type="radio" name="begin" value="one" /> Да</label><br />
                            <label><input type="radio" name="begin" value="two" /> Нет, вернуться к каталогу товаров</label><br />
                            <button type="submit" class="btn btn-primary">Поехали!</button>
                        </form>    -->
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>