<?php include ROOT . '/views/layouts/header.php'; ?>
<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
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
                    ?> 
 
                        <form method="post">                           
                            <h4>Данный тест поможет Вам определиться с выбором ноутбука</h4><br/>
                            <p>Начать тест?</p>
                             <input type="radio" name="begin" value="one" /> Да<br />
                             <input type="radio" name="begin" value="two" /> Нет, вернуться к каталогу товаров<br />
                            <input type="submit" value='Поехали!'/>
                        </form>    
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>