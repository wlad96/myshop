<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q3'] ) )
                    {
                        switch( $_POST['q3'] )
                        {
                            case 'one':                             
                                echo "Ваш выбор - ноутбуки для работы!";                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/2">Перейти к каталогу ноутбуков для работы</a>';
                                exit;
                            case 'two':
                                 echo '<script>location.href = "http://myshop/4question";</script>'; //переход к вопросу 4
                                exit;   
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 3. Часто ли вы носите с собой ноутбук?</h4>
                            <input type="radio" name="q3" value="one" /> Нет<br />
                            <input type="radio" name="q3" value="two" /> Да<br />                           
                            <input type="submit" value='Далее'/>
                        </form>        
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>
    
</body>
</html>