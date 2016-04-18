<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 padding-right contact-information">   
                <h3>Подбор ноутбука</h3>                                                     
                <?php
                    if( isset( $_POST['q2'] ) )
                    {
                        switch( $_POST['q2'] )
                        {
                            case 'one':
                                echo '<script>location.href = "http://myshop/3question";</script>'; //http://myshop/3question - правильный переход к вопросу 3
                                exit;
                            case 'two':
                                 echo "Ваш выбор - игровые ноутбуки!";                              
                                echo '<br/>';                              
                                echo '<a href = "http://myshop/category/5">Перейти к каталогу игровых ноутбуков</a>';
                                exit;   
                               
                            case 'three':
                                echo '<script>location.href = "http://myshop/5question";</script>'; //переход к вопросу 5
                                exit;
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Вопрос 2. Для каких целей вы приобретаете ноутбук?</h4>
                            <input type="radio" name="q2" value="one" /> В основном для работы/учебы<br />
                            <input type="radio" name="q2" value="two" /> В основном собираюсь играть<br />
                            <input type="radio" name="q2" value="three" /> Для проигрывания аудио и видео, общения в сети<br />
                            <input type="submit" value='Далее'/>
                        </form>      
          
            </div>
        </div>
    </div>
    </section> 
    <?php include ROOT . '/views/layouts/footer.php'; ?>
    
</body>
</html>