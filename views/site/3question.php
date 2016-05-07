<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q3'] ) )
                    {
                        switch( $_POST['q3'] )
                        {
                            case 'one':                             
                                echo "Ваш выбор - ноутбуки для работы!";                              
                                echo '<br/><br/>';  
                                echo "<p>Ноутбук - это не только развлекательный центр, а еще и рабочий инструмент. Причем если для развлечений важнее "
                                        . "мощная видеокарта, большой экран и хорошая акустика, то для рабочего ноутбука важнее надежность, качество, широкие "
                                        . "коммуникационные возможности и мощный процессор для сложных математических вычислений.</p>";                             
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
                            <label><input type="radio" name="q3" value="one" /> Нет</label><br />
                            <label><input type="radio" name="q3" value="two" /> Да</label><br />                           
                            <button type="submit" class="btn btn-primary">Далее</button>
                        </form>        
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?>
    
</body>
</html>