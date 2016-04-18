<?php include ROOT . '/views/layouts/header.php'; ?>
<body>
    <section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-6 padding-right contact-information">   
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
                            <p>Данный тест поможет Вам определиться с выбором ноутбука</p><br/>
                            <p>Начать тест?</p>
                             <input type="radio" name="begin" value="one" /> Да<br />
                             <input type="radio" name="begin" value="two" /> Нет, вернуться к каталогу товаров<br />
                            <input type="submit" value='Поехали!'/>
                        </form>    
            </div>
        </div>
    </div>
    </section>
    <?php include ROOT . '/views/layouts/footer.php'; ?> 
    
</body>
</html>