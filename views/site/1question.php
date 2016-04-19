<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q1'] ) )
                    {
                        switch( $_POST['q1'] )
                        {
                            case 'one':
                                echo "Ваш выбор - недорогие ноутбуки!";                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/1">Перейти к каталогу недорогих ноутбуков</a>';
                                exit;

                            case 'two':
                               echo '<script>location.href = "http://myshop/views/site/2question";</script>'; //переход к вопросу 2
                               exit; 
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 1. Рассчитываете ли вы потратить большую сумму денег на покупку ноутбука?</h4>
                            <label><input type="radio" name="q1" value="one" /> Нет</label><br />
                            <label><input type="radio" name="q1" value="two" /> Да</label><br />
                            <button type="submit" class="btn btn-success">Далее</button>
                        </form>      
          
            </div>
            <div class="col-sm-3"></div>   
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>   
    
</body>
</html>