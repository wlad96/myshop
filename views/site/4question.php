<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q4'] ) )
                    {
                        switch( $_POST['q4'] )
                        {
                            case 'one':                             
                                echo 'Ваш выбор - ноутбуки "всегда с собой"!';                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/3">Перейти к каталогу ноутбуков "всегда с собой"</a>';
           
                                //echo '<script>window.location.href = "http://myshop/category/1";</script>'; //переход на страницу каталога
                                exit;
                            case 'two':
                                 case 'one':                             
                                echo 'Ваш выбор - ультрабуки!';                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/4">Перейти к каталогу ультрабуков</a>';
                               exit;   
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 4. Вы собираетесь работать от батареи более 6 часов?</h4>
                            <input type="radio" name="q4" value="one" /> Нет<br />
                            <input type="radio" name="q4" value="two" /> Да<br />                           
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