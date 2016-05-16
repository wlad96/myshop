<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>   
            <div class="col-sm-6 padding-right choice">   
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
                                echo '<br/><br/>';  
                                echo "<p>Игровой ноутбук - этот ноутбук предназначен для тех, кому нужен мощный (игровой) компьютер с полным набором "
                                        . "современных функций и большим широкоформатным дисплеем, но все же достаточно компактный для переноски. "
                                        . "Быстрый процессор и производительная видеокарта позволят без проблем наслаждаться современными играми "
                                        . "и видео высокой четкости. Сложные математические задачи, такие как кодирование видео, также по плечу "
                                        . "этим игровым ноутбукам.</p>";     
                                echo '<a href = "http://myshop/category/5">Перейти к каталогу игровых ноутбуков</a>';
                                exit;   
                               
                            case 'three':
                                echo '<script>location.href = "http://myshop/5question";</script>'; //переход к вопросу 5
                                exit;
                        }
                    }
                    ?> 
 
                        <form method="post">
                            <h4>Для каких целей вы приобретаете ноутбук?</h4>
                            <label><input type="radio" name="q2" value="one" /> В основном для работы/учебы</label><br />
                            <label><input type="radio" name="q2" value="two" /> В основном собираюсь играть</label><br />
                            <label><input type="radio" name="q2" value="three" /> Для проигрывания аудио и видео, общения в сети</label><br />
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